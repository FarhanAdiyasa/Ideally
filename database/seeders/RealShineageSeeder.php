<?php

namespace Database\Seeders;

use App\Models\Shineage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class RealShineageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        Shineage::create([
            'seri' => 'Neon Box',
            'nama_produk' => 'Neon Box Lingkaran Kecil Putih',
            'slug' => Str::random(10),
            'jenis' => 'Unit',
            'panjang' => 30,
            'lebar' => 20,
            'diameter' => 10,
            'tinggi' => 5,
            'garansi' => '3 bulan',
            'warna' => 'Putih',
            'dimensi' => 'Kotak',
            'material_pendukung' => 'Listrik',
            'finishing' => 'Contoh Finishing',
            'gambar_1' => 'photos/shineagegambar1.jpg',
            'gambar_2' => 'photos/shineagegambar2.jpg',
            'gambar_3' => 'photos/shineagegambar3.jpg',
            'armada_minimum' => 'Motor',
            'deskripsi_singkat' => 'Deskripsi singkat Shineages Deskripsi singkat Shineages Deskripsi singkat Shineages Deskripsi singkat Shineages',
            'stok' => 50,
            'item_terjual' => 10,
            'harga_jual_projek_ideally' => 120000,
            'harga_b2I_11_unit' => 100000,
            'harga_b2I_1_unit' => 90000,
            'harga_b2B_11_unit' => 90000,
            'harga_b2B_1_unit' => 80000,
            'harga_b2C_11_unit' => 80000,
            'harga_b2C_1_unit' => 70000,
            'tanggal_publikasi' => $this->randomDateTimeInCurrentMonth($faker),
            'created_at' => $this->randomDateTimeInCurrentMonth($faker),
            'created_by' => 1, // Ganti dengan ID user yang sesuai
        ]);

        Shineage::create([
            'seri' => 'Neon Box',
            'nama_produk' => 'Neon Box Lingkaran Sedang Putih',
            'slug' => Str::random(10),
            'jenis' => 'Unit',
            'panjang' => 30,
            'lebar' => 20,
            'diameter' => 10,
            'tinggi' => 5,
            'garansi' => '3 bulan',
            'warna' => 'Putih',
            'dimensi' => 'Kotak',
            'material_pendukung' => 'Listrik',
            'finishing' => 'Contoh Finishing',
            'gambar_1' => 'photos/shineagegambar1.jpg',
            'gambar_2' => 'photos/shineagegambar2.jpg',
            'gambar_3' => 'photos/shineagegambar3.jpg',
            'armada_minimum' => 'Motor',
            'deskripsi_singkat' => 'Deskripsi singkat Shineages Deskripsi singkat Shineages Deskripsi singkat Shineages Deskripsi singkat Shineages',
            'stok' => 50,
            'item_terjual' => 10,
            'harga_jual_projek_ideally' => 120000,
            'harga_b2I_11_unit' => 100000,
            'harga_b2I_1_unit' => 90000,
            'harga_b2B_11_unit' => 90000,
            'harga_b2B_1_unit' => 80000,
            'harga_b2C_11_unit' => 80000,
            'harga_b2C_1_unit' => 70000,
            'tanggal_publikasi' => $this->randomDateTimeInCurrentMonth($faker),
            'created_at' => $this->randomDateTimeInCurrentMonth($faker),
            'created_by' => 1, // Ganti dengan ID user yang sesuai
        ]);

        Shineage::create([
            'seri' => 'Neon Box',
            'nama_produk' => 'Neon Box Lingkaran Besar Putih',
            'slug' => Str::random(10),
            'jenis' => 'Unit',
            'panjang' => 30,
            'lebar' => 20,
            'diameter' => 10,
            'tinggi' => 5,
            'garansi' => '3 bulan',
            'warna' => 'Putih',
            'dimensi' => 'Kotak',
            'material_pendukung' => 'Listrik',
            'finishing' => 'Contoh Finishing',
            'gambar_1' => 'photos/shineagegambar1.jpg',
            'gambar_2' => 'photos/shineagegambar2.jpg',
            'gambar_3' => 'photos/shineagegambar3.jpg',
            'armada_minimum' => 'Motor',
            'deskripsi_singkat' => 'Deskripsi singkat Shineages Deskripsi singkat Shineages Deskripsi singkat Shineages Deskripsi singkat Shineages',
            'stok' => 50,
            'item_terjual' => 10,
            'harga_jual_projek_ideally' => 120000,
            'harga_b2I_11_unit' => 100000,
            'harga_b2I_1_unit' => 90000,
            'harga_b2B_11_unit' => 90000,
            'harga_b2B_1_unit' => 80000,
            'harga_b2C_11_unit' => 80000,
            'harga_b2C_1_unit' => 70000,
            'tanggal_publikasi' => $this->randomDateTimeInCurrentMonth($faker),
            'created_at' => $this->randomDateTimeInCurrentMonth($faker),
            'created_by' => 1, // Ganti dengan ID user yang sesuai
        ]);

        Shineage::create([
            'seri' => 'Neon Box',
            'nama_produk' => 'Neon Box Lingkaran Ekstra Besar Putih',
            'slug' => Str::random(10),
            'jenis' => 'Unit',
            'panjang' => 30,
            'lebar' => 20,
            'diameter' => 10,
            'tinggi' => 5,
            'garansi' => '3 bulan',
            'warna' => 'Putih',
            'dimensi' => 'Kotak',
            'material_pendukung' => 'Listrik',
            'finishing' => 'Contoh Finishing',
            'gambar_1' => 'photos/shineagegambar1.jpg',
            'gambar_2' => 'photos/shineagegambar2.jpg',
            'gambar_3' => 'photos/shineagegambar3.jpg',
            'armada_minimum' => 'Motor',
            'deskripsi_singkat' => 'Deskripsi singkat Shineages Deskripsi singkat Shineages Deskripsi singkat Shineages Deskripsi singkat Shineages',
            'stok' => 50,
            'item_terjual' => 10,
            'harga_jual_projek_ideally' => 120000,
            'harga_b2I_11_unit' => 100000,
            'harga_b2I_1_unit' => 90000,
            'harga_b2B_11_unit' => 90000,
            'harga_b2B_1_unit' => 80000,
            'harga_b2C_11_unit' => 80000,
            'harga_b2C_1_unit' => 70000,
            'tanggal_publikasi' => $this->randomDateTimeInCurrentMonth($faker),
            'created_at' => $this->randomDateTimeInCurrentMonth($faker),
            'created_by' => 1, // Ganti dengan ID user yang sesuai
        ]);

        Shineage::create([
            'seri' => 'Neon Box',
            'nama_produk' => 'Neon Box Lingkaran Kecil Hitam',
            'slug' => Str::random(10),
            'jenis' => 'Unit',
            'panjang' => 30,
            'lebar' => 20,
            'diameter' => 10,
            'tinggi' => 5,
            'garansi' => '3 bulan',
            'warna' => 'Putih',
            'dimensi' => 'Kotak',
            'material_pendukung' => 'Listrik',
            'finishing' => 'Contoh Finishing',
            'gambar_1' => 'photos/shineagegambar1.jpg',
            'gambar_2' => 'photos/shineagegambar2.jpg',
            'gambar_3' => 'photos/shineagegambar3.jpg',
            'armada_minimum' => 'Motor',
            'deskripsi_singkat' => 'Deskripsi singkat Shineages Deskripsi singkat Shineages Deskripsi singkat Shineages Deskripsi singkat Shineages',
            'stok' => 50,
            'item_terjual' => 10,
            'harga_jual_projek_ideally' => 120000,
            'harga_b2I_11_unit' => 100000,
            'harga_b2I_1_unit' => 90000,
            'harga_b2B_11_unit' => 90000,
            'harga_b2B_1_unit' => 80000,
            'harga_b2C_11_unit' => 80000,
            'harga_b2C_1_unit' => 70000,
            'tanggal_publikasi' => $this->randomDateTimeInCurrentMonth($faker),
            'created_at' => $this->randomDateTimeInCurrentMonth($faker),
            'created_by' => 1, // Ganti dengan ID user yang sesuai
        ]);

        Shineage::create([
            'seri' => 'Neon Box',
            'nama_produk' => 'Neon Box Lingkaran Sedang Hitam',
            'slug' => Str::random(10),
            'jenis' => 'Unit',
            'panjang' => 30,
            'lebar' => 20,
            'diameter' => 10,
            'tinggi' => 5,
            'garansi' => '3 bulan',
            'warna' => 'Putih',
            'dimensi' => 'Kotak',
            'material_pendukung' => 'Listrik',
            'finishing' => 'Contoh Finishing',
            'gambar_1' => 'photos/shineagegambar1.jpg',
            'gambar_2' => 'photos/shineagegambar2.jpg',
            'gambar_3' => 'photos/shineagegambar3.jpg',
            'armada_minimum' => 'Motor',
            'deskripsi_singkat' => 'Deskripsi singkat Shineages Deskripsi singkat Shineages Deskripsi singkat Shineages Deskripsi singkat Shineages',
            'stok' => 50,
            'item_terjual' => 10,
            'harga_jual_projek_ideally' => 120000,
            'harga_b2I_11_unit' => 100000,
            'harga_b2I_1_unit' => 90000,
            'harga_b2B_11_unit' => 90000,
            'harga_b2B_1_unit' => 80000,
            'harga_b2C_11_unit' => 80000,
            'harga_b2C_1_unit' => 70000,
            'tanggal_publikasi' => $this->randomDateTimeInCurrentMonth($faker),
            'created_at' => $this->randomDateTimeInCurrentMonth($faker),
            'created_by' => 1, // Ganti dengan ID user yang sesuai
        ]);

        Shineage::create([
            'seri' => 'Neon Box',
            'nama_produk' => 'Neon Box Lingkaran Besar Hitam',
            'slug' => Str::random(10),
            'jenis' => 'Unit',
            'panjang' => 30,
            'lebar' => 20,
            'diameter' => 10,
            'tinggi' => 5,
            'garansi' => '3 bulan',
            'warna' => 'Putih',
            'dimensi' => 'Kotak',
            'material_pendukung' => 'Listrik',
            'finishing' => 'Contoh Finishing',
            'gambar_1' => 'photos/shineagegambar1.jpg',
            'gambar_2' => 'photos/shineagegambar2.jpg',
            'gambar_3' => 'photos/shineagegambar3.jpg',
            'armada_minimum' => 'Motor',
            'deskripsi_singkat' => 'Deskripsi singkat Shineages Deskripsi singkat Shineages Deskripsi singkat Shineages Deskripsi singkat Shineages',
            'stok' => 50,
            'item_terjual' => 10,
            'harga_jual_projek_ideally' => 120000,
            'harga_b2I_11_unit' => 100000,
            'harga_b2I_1_unit' => 90000,
            'harga_b2B_11_unit' => 90000,
            'harga_b2B_1_unit' => 80000,
            'harga_b2C_11_unit' => 80000,
            'harga_b2C_1_unit' => 70000,
            'tanggal_publikasi' => $this->randomDateTimeInCurrentMonth($faker),
            'created_at' => $this->randomDateTimeInCurrentMonth($faker),
            'created_by' => 1, // Ganti dengan ID user yang sesuai
        ]);

        Shineage::create([
            'seri' => 'Neon Box',
            'nama_produk' => 'Neon Box Lingkaran Ekstra Besar Hitam',
            'slug' => Str::random(10),
            'jenis' => 'Unit',
            'panjang' => 30,
            'lebar' => 20,
            'diameter' => 10,
            'tinggi' => 5,
            'garansi' => '3 bulan',
            'warna' => 'Putih',
            'dimensi' => 'Kotak',
            'material_pendukung' => 'Listrik',
            'finishing' => 'Contoh Finishing',
            'gambar_1' => 'photos/shineagegambar1.jpg',
            'gambar_2' => 'photos/shineagegambar2.jpg',
            'gambar_3' => 'photos/shineagegambar3.jpg',
            'armada_minimum' => 'Motor',
            'deskripsi_singkat' => 'Deskripsi singkat Shineages Deskripsi singkat Shineages Deskripsi singkat Shineages Deskripsi singkat Shineages',
            'stok' => 50,
            'item_terjual' => 10,
            'harga_jual_projek_ideally' => 120000,
            'harga_b2I_11_unit' => 100000,
            'harga_b2I_1_unit' => 90000,
            'harga_b2B_11_unit' => 90000,
            'harga_b2B_1_unit' => 80000,
            'harga_b2C_11_unit' => 80000,
            'harga_b2C_1_unit' => 70000,
            'tanggal_publikasi' => $this->randomDateTimeInCurrentMonth($faker),
            'created_at' => $this->randomDateTimeInCurrentMonth($faker),
            'created_by' => 1, // Ganti dengan ID user yang sesuai
        ]);
    }

    private function randomDateTimeInCurrentMonth($faker)
    {
        $startOfMonth = Carbon::now()->startOfMonth();
        $endOfMonth = Carbon::now()->endOfMonth();

        return $faker->dateTimeBetween($startOfMonth, $endOfMonth);
    }
}
