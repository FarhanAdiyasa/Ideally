<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up()
    {
        DB::statement("
            CREATE VIEW order_details_view AS
            SELECT
                o.id_order,
                o.nomor_order,
                o.status,
                o.created_at AS tanggal,
                df.id_nurseri AS id_produk,
                dedikasi_floras.nama_lokal as nama_produk,
                'dedikasi_floras' AS jenis_produk
            FROM orders o
            LEFT JOIN dedikasi_floras_orders df ON o.id_order = df.id_order
            LEFT JOIN dedikasi_floras dedikasi_floras ON df.id_nurseri = dedikasi_floras.id_nurseri
            UNION
            SELECT
                o.id_order,
                o.nomor_order,
                o.status,
                o.created_at AS tanggal,
                ag.id_agrigard AS id_produk,
                agrigards.nama_produk,
                'agrigards' AS jenis_produk
            FROM orders o
            LEFT JOIN agrigards_orders ag ON o.id_order = ag.id_order
            LEFT JOIN agrigards agrigards ON ag.id_agrigard = agrigards.id_agrigard
            UNION
            SELECT
                o.id_order,
                o.nomor_order,
                o.status,
                o.created_at AS tanggal,
                bt.id_batu AS id_produk,
                batunesias.nama_produk,
                'batunesias' AS jenis_produk
            FROM orders o
            LEFT JOIN batunesias_orders bt ON o.id_order = bt.id_order
            LEFT JOIN batunesias batunesias ON bt.id_batu = batunesias.id_batu
            UNION
            SELECT
                o.id_order,
                o.nomor_order,
                o.status,
                o.created_at AS tanggal,
                et.id_everlas_things AS id_produk,
                everlas_things.nama_produk,
                'everlas_things' AS jenis_produk
            FROM orders o
            LEFT JOIN everlas_things_orders et ON o.id_order = et.id_order
            LEFT JOIN everlas_things everlas_things ON et.id_everlas_things = everlas_things.id_everlas_things
            UNION
            SELECT
                o.id_order,
                o.nomor_order,
                o.status,
                o.created_at AS tanggal,
                kt.id_konkurito AS id_produk,
                konkuritos.nama_produk,
                'konkuritos' AS jenis_produk
            FROM orders o
            LEFT JOIN konkuritos_orders kt ON o.id_order = kt.id_order
            LEFT JOIN konkuritos konkuritos ON kt.id_konkurito = konkuritos.id_konkurito
            UNION
            SELECT
                o.id_order,
                o.nomor_order,
                o.status,
                o.created_at AS tanggal,
                sa.id_shineage AS id_produk,
                shineages.nama_produk,
                'shineages' AS jenis_produk
            FROM orders o
            LEFT JOIN shineages_orders sa ON o.id_order = sa.id_order
            LEFT JOIN shineages shineages ON sa.id_shineage = shineages.id_shineage
            ORDER BY id_order, jenis_produk;
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP VIEW IF EXISTS order_details_view');
    }
};
