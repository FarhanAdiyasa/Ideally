<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $sql = "
        CREATE VIEW view_product_promo AS
        SELECT
            p.id_promo,
            a.id_agrigard AS id_produk,
            'agrigard' AS brand_produk
        FROM
            promos p
        JOIN
            agrigards_promos ap ON p.id_promo = ap.id_promo
        JOIN
            agrigards a ON ap.id_agrigard = a.id_agrigard
        UNION
        SELECT
            p.id_promo,
            s.id_shineage AS id_produk,
            'shineage' AS brand_produk
        FROM
            promos p
        JOIN
            shineages_promos sp ON p.id_promo = sp.id_promo
        JOIN
            shineages s ON sp.id_shineage = s.id_shineage
        UNION
        SELECT
            p.id_promo,
            k.id_konkurito AS id_produk,
            'konkurito' AS brand_produk
        FROM
            promos p
        JOIN
            konkuritos_promos kp ON p.id_promo = kp.id_promo
        JOIN
            konkuritos k ON kp.id_konkurito = k.id_konkurito
        UNION
        SELECT
            p.id_promo,
            b.id_batu AS id_produk,
            'batunesia' AS brand_produk
        FROM
            promos p
        JOIN
            batunesias_promos bp ON p.id_promo = bp.id_promo
        JOIN
            batunesias b ON bp.id_batu = b.id_batu
        UNION
        SELECT
            p.id_promo,
            e.id_everlas_things AS id_produk,
            'everlas_things' AS brand_produk
        FROM
            promos p
        JOIN
            everlas_things_promos ep ON p.id_promo = ep.id_promo
        JOIN
            everlas_things e ON ep.id_everlas_things = e.id_everlas_things
        UNION
        SELECT
            p.id_promo,
            n.id_nurseri AS id_produk,
            'nurseri' AS brand_produk
        FROM
            promos p
        JOIN
            dedikasi_floras_promos np ON p.id_promo = np.id_promo
        JOIN
            dedikasi_floras n ON np.id_nurseri = n.id_nurseri;
        ";

        DB::statement($sql);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
