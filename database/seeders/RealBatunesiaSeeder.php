<?php

namespace Database\Seeders;

use App\Models\Batunesia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class RealBatunesiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        Batunesia::create([
            'nama_produk' => 'Batu Andesit Potong Rapih',
            'slug' => Str::random(10),
            'kategori' => 'Batu Tempel',
            'panjang' => 20,
            'lebar' => 15,
            'diameter' => 10,
            'tinggi' => 25,
            'satuan' => 'm2',
            'warna_1' => 'Abu-abu',
            'warna_2' => 'Tidak Ada',
            'gambar_1' => 'photos/batugambar1.jpg',
            'gambar_2' => 'photos/batugambar2.jpg',
            'gambar_3' => 'photos/batugambar3.jpg',
            'armada_minimum' => 'Kargo Mobil',
            'berat_gram' => '1000',
            'stok' => 50,
            'item_terjual' => 10,
            'penempatan' => 'Luar Ruangan',
            'deskripsi_singkat' => 'Deskripsi singkat batu alam Batu adalah benda alam yang tersusun atas kumpulan mineral penyusun kerak bumi yang menyatu secara padat maupun berserakan.',
            'harga_jual_projek_ideally' => 150000,
            'harga_b2I_31_unit' => 140000,
            'harga_b2I_11_unit' => 130000,
            'harga_b2I_1_unit' => 120000,
            'harga_b2B_31_unit' => 130000,
            'harga_b2B_11_unit' => 120000,
            'harga_b2B_1_unit' => 110000,
            'harga_b2C_31_unit' => 120000,
            'harga_b2C_11_unit' => 110000,
            'harga_b2C_1_unit' => 100000,
            'tanggal_publikasi' => $this->randomDateTimeInCurrentMonth($faker),
            'created_at' => now(),
            'created_by' => 1, // Ganti dengan ID user yang sesuai
        ]);

        Batunesia::create([
            'nama_produk' => 'Batu Andesit Potong Kasar',
            'slug' => Str::random(10),
            'kategori' => 'Batu Tempel',
            'panjang' => 20,
            'lebar' => 15,
            'diameter' => 10,
            'tinggi' => 25,
            'satuan' => 'm2',
            'warna_1' => 'Abu-abu',
            'warna_2' => 'Tidak Ada',
            'gambar_1' => 'photos/batugambar1.jpg',
            'gambar_2' => 'photos/batugambar2.jpg',
            'gambar_3' => 'photos/batugambar3.jpg',
            'armada_minimum' => 'Kargo Mobil',
            'berat_gram' => '1000',
            'berat_gram' => '800',
            'stok' => 50,
            'item_terjual' => 10,
            'penempatan' => 'Luar Ruangan',
            'deskripsi_singkat' => 'Deskripsi singkat batu alam Batu adalah benda alam yang tersusun atas kumpulan mineral penyusun kerak bumi yang menyatu secara padat maupun berserakan.',
            'harga_jual_projek_ideally' => 150000,
            'harga_b2I_31_unit' => 140000,
            'harga_b2I_11_unit' => 130000,
            'harga_b2I_1_unit' => 120000,
            'harga_b2B_31_unit' => 130000,
            'harga_b2B_11_unit' => 120000,
            'harga_b2B_1_unit' => 110000,
            'harga_b2C_31_unit' => 120000,
            'harga_b2C_11_unit' => 110000,
            'harga_b2C_1_unit' => 100000,
            'tanggal_publikasi' => $this->randomDateTimeInCurrentMonth($faker),
            'created_at' => now(),
            'created_by' => 1, // Ganti dengan ID user yang sesuai
        ]);

        Batunesia::create([
            'nama_produk' => 'Batu Andesit Napoli',
            'slug' => Str::random(10),
            'kategori' => 'Batu Tempel',
            'panjang' => 20,
            'lebar' => 15,
            'diameter' => 10,
            'tinggi' => 25,
            'satuan' => 'm2',
            'warna_1' => 'Abu-abu',
            'warna_2' => 'Tidak Ada',
            'gambar_1' => 'photos/batugambar1.jpg',
            'gambar_2' => 'photos/batugambar2.jpg',
            'gambar_3' => 'photos/batugambar3.jpg',
            'armada_minimum' => 'Kargo Mobil',
            'berat_gram' => '1000',
            'stok' => 50,
            'item_terjual' => 10,
            'penempatan' => 'Luar Ruangan',
            'deskripsi_singkat' => 'Deskripsi singkat batu alam Batu adalah benda alam yang tersusun atas kumpulan mineral penyusun kerak bumi yang menyatu secara padat maupun berserakan.',
            'harga_jual_projek_ideally' => 150000,
            'harga_b2I_31_unit' => 140000,
            'harga_b2I_11_unit' => 130000,
            'harga_b2I_1_unit' => 120000,
            'harga_b2B_31_unit' => 130000,
            'harga_b2B_11_unit' => 120000,
            'harga_b2B_1_unit' => 110000,
            'harga_b2C_31_unit' => 120000,
            'harga_b2C_11_unit' => 110000,
            'harga_b2C_1_unit' => 100000,
            'tanggal_publikasi' => $this->randomDateTimeInCurrentMonth($faker),
            'created_at' => now(),
            'created_by' => 1, // Ganti dengan ID user yang sesuai
        ]);

        Batunesia::create([
            'nama_produk' => 'Batu Andesit Susun Sirih',
            'slug' => Str::random(10),
            'kategori' => 'Batu Tempel',
            'panjang' => 20,
            'lebar' => 15,
            'diameter' => 10,
            'tinggi' => 25,
            'satuan' => 'm2',
            'warna_1' => 'Abu-abu',
            'warna_2' => 'Tidak Ada',
            'gambar_1' => 'photos/batugambar1.jpg',
            'gambar_2' => 'photos/batugambar2.jpg',
            'gambar_3' => 'photos/batugambar3.jpg',
            'armada_minimum' => 'Kargo Mobil',
            'berat_gram' => '1000',
            'stok' => 50,
            'item_terjual' => 10,
            'penempatan' => 'Luar Ruangan',
            'deskripsi_singkat' => 'Deskripsi singkat batu alam Batu adalah benda alam yang tersusun atas kumpulan mineral penyusun kerak bumi yang menyatu secara padat maupun berserakan.',
            'harga_jual_projek_ideally' => 150000,
            'harga_b2I_31_unit' => 140000,
            'harga_b2I_11_unit' => 130000,
            'harga_b2I_1_unit' => 120000,
            'harga_b2B_31_unit' => 130000,
            'harga_b2B_11_unit' => 120000,
            'harga_b2B_1_unit' => 110000,
            'harga_b2C_31_unit' => 120000,
            'harga_b2C_11_unit' => 110000,
            'harga_b2C_1_unit' => 100000,
            'tanggal_publikasi' => $this->randomDateTimeInCurrentMonth($faker),
            'created_at' => now(),
            'created_by' => 1, // Ganti dengan ID user yang sesuai
        ]);

        Batunesia::create([
            'nama_produk' => 'Batu Bali Green',
            'slug' => Str::random(10),
            'kategori' => 'Batu Tempel',
            'panjang' => 20,
            'lebar' => 15,
            'diameter' => 10,
            'tinggi' => 25,
            'satuan' => 'm2',
            'warna_1' => 'Abu-abu',
            'warna_2' => 'Tidak Ada',
            'gambar_1' => 'photos/batugambar1.jpg',
            'gambar_2' => 'photos/batugambar2.jpg',
            'gambar_3' => 'photos/batugambar3.jpg',
            'armada_minimum' => 'Kargo Mobil',
            'berat_gram' => '1000',
            'stok' => 50,
            'item_terjual' => 10,
            'penempatan' => 'Luar Ruangan',
            'deskripsi_singkat' => 'Deskripsi singkat batu alam Batu adalah benda alam yang tersusun atas kumpulan mineral penyusun kerak bumi yang menyatu secara padat maupun berserakan.',
            'harga_jual_projek_ideally' => 150000,
            'harga_b2I_31_unit' => 140000,
            'harga_b2I_11_unit' => 130000,
            'harga_b2I_1_unit' => 120000,
            'harga_b2B_31_unit' => 130000,
            'harga_b2B_11_unit' => 120000,
            'harga_b2B_1_unit' => 110000,
            'harga_b2C_31_unit' => 120000,
            'harga_b2C_11_unit' => 110000,
            'harga_b2C_1_unit' => 100000,
            'tanggal_publikasi' => $this->randomDateTimeInCurrentMonth($faker),
            'created_at' => now(),
            'created_by' => 1, // Ganti dengan ID user yang sesuai
        ]);

        Batunesia::create([
            'nama_produk' => 'Batu Bali Grey',
            'slug' => Str::random(10),
            'kategori' => 'Batu Tempel',
            'panjang' => 20,
            'lebar' => 15,
            'diameter' => 10,
            'tinggi' => 25,
            'satuan' => 'm2',
            'warna_1' => 'Abu-abu',
            'warna_2' => 'Tidak Ada',
            'gambar_1' => 'photos/batugambar1.jpg',
            'gambar_2' => 'photos/batugambar2.jpg',
            'gambar_3' => 'photos/batugambar3.jpg',
            'armada_minimum' => 'Kargo Mobil',
            'berat_gram' => '1000',
            'stok' => 50,
            'item_terjual' => 10,
            'penempatan' => 'Luar Ruangan',
            'deskripsi_singkat' => 'Deskripsi singkat batu alam Batu adalah benda alam yang tersusun atas kumpulan mineral penyusun kerak bumi yang menyatu secara padat maupun berserakan.',
            'harga_jual_projek_ideally' => 150000,
            'harga_b2I_31_unit' => 140000,
            'harga_b2I_11_unit' => 130000,
            'harga_b2I_1_unit' => 120000,
            'harga_b2B_31_unit' => 130000,
            'harga_b2B_11_unit' => 120000,
            'harga_b2B_1_unit' => 110000,
            'harga_b2C_31_unit' => 120000,
            'harga_b2C_11_unit' => 110000,
            'harga_b2C_1_unit' => 100000,
            'tanggal_publikasi' => $this->randomDateTimeInCurrentMonth($faker),
            'created_at' => now(),
            'created_by' => 1, // Ganti dengan ID user yang sesuai
        ]);

        Batunesia::create([
            'nama_produk' => 'Batu Bali Limestone',
            'slug' => Str::random(10),
            'kategori' => 'Batu Tempel',
            'panjang' => 20,
            'lebar' => 15,
            'diameter' => 10,
            'tinggi' => 25,
            'satuan' => 'm2',
            'warna_1' => 'Abu-abu',
            'warna_2' => 'Tidak Ada',
            'gambar_1' => 'photos/batugambar1.jpg',
            'gambar_2' => 'photos/batugambar2.jpg',
            'gambar_3' => 'photos/batugambar3.jpg',
            'armada_minimum' => 'Kargo Mobil',
            'berat_gram' => '1000',
            'stok' => 50,
            'item_terjual' => 10,
            'penempatan' => 'Luar Ruangan',
            'deskripsi_singkat' => 'Deskripsi singkat batu alam Batu adalah benda alam yang tersusun atas kumpulan mineral penyusun kerak bumi yang menyatu secara padat maupun berserakan.',
            'harga_jual_projek_ideally' => 150000,
            'harga_b2I_31_unit' => 140000,
            'harga_b2I_11_unit' => 130000,
            'harga_b2I_1_unit' => 120000,
            'harga_b2B_31_unit' => 130000,
            'harga_b2B_11_unit' => 120000,
            'harga_b2B_1_unit' => 110000,
            'harga_b2C_31_unit' => 120000,
            'harga_b2C_11_unit' => 110000,
            'harga_b2C_1_unit' => 100000,
            'tanggal_publikasi' => $this->randomDateTimeInCurrentMonth($faker),
            'created_at' => now(),
            'created_by' => 1, // Ganti dengan ID user yang sesuai
        ]);

        Batunesia::create([
            'nama_produk' => 'Batu Bobos',
            'slug' => Str::random(10),
            'kategori' => 'Batu Tempel',
            'panjang' => 20,
            'lebar' => 15,
            'diameter' => 10,
            'tinggi' => 25,
            'satuan' => 'm2',
            'warna_1' => 'Abu-abu',
            'warna_2' => 'Tidak Ada',
            'gambar_1' => 'photos/batugambar1.jpg',
            'gambar_2' => 'photos/batugambar2.jpg',
            'gambar_3' => 'photos/batugambar3.jpg',
            'armada_minimum' => 'Kargo Mobil',
            'berat_gram' => '1000',
            'stok' => 50,
            'item_terjual' => 10,
            'penempatan' => 'Luar Ruangan',
            'deskripsi_singkat' => 'Deskripsi singkat batu alam Batu adalah benda alam yang tersusun atas kumpulan mineral penyusun kerak bumi yang menyatu secara padat maupun berserakan.',
            'harga_jual_projek_ideally' => 150000,
            'harga_b2I_31_unit' => 140000,
            'harga_b2I_11_unit' => 130000,
            'harga_b2I_1_unit' => 120000,
            'harga_b2B_31_unit' => 130000,
            'harga_b2B_11_unit' => 120000,
            'harga_b2B_1_unit' => 110000,
            'harga_b2C_31_unit' => 120000,
            'harga_b2C_11_unit' => 110000,
            'harga_b2C_1_unit' => 100000,
            'tanggal_publikasi' => $this->randomDateTimeInCurrentMonth($faker),
            'created_at' => now(),
            'created_by' => 1, // Ganti dengan ID user yang sesuai
        ]);

        Batunesia::create([
            'nama_produk' => 'Batu Bronjol',
            'slug' => Str::random(10),
            'kategori' => 'Batu Tempel',
            'panjang' => 20,
            'lebar' => 15,
            'diameter' => 10,
            'tinggi' => 25,
            'satuan' => 'Karung 5 kg',
            'warna_1' => 'Abu-abu',
            'warna_2' => 'Tidak Ada',
            'gambar_1' => 'photos/batugambar1.jpg',
            'gambar_2' => 'photos/batugambar2.jpg',
            'gambar_3' => 'photos/batugambar3.jpg',
            'armada_minimum' => 'Kargo Mobil',
            'berat_gram' => '1000',
            'stok' => 50,
            'item_terjual' => 10,
            'penempatan' => 'Luar Ruangan',
            'deskripsi_singkat' => 'Deskripsi singkat batu alam Batu adalah benda alam yang tersusun atas kumpulan mineral penyusun kerak bumi yang menyatu secara padat maupun berserakan.',
            'harga_jual_projek_ideally' => 150000,
            'harga_b2I_31_unit' => 140000,
            'harga_b2I_11_unit' => 130000,
            'harga_b2I_1_unit' => 120000,
            'harga_b2B_31_unit' => 130000,
            'harga_b2B_11_unit' => 120000,
            'harga_b2B_1_unit' => 110000,
            'harga_b2C_31_unit' => 120000,
            'harga_b2C_11_unit' => 110000,
            'harga_b2C_1_unit' => 100000,
            'tanggal_publikasi' => $this->randomDateTimeInCurrentMonth($faker),
            'created_at' => now(),
            'created_by' => 1, // Ganti dengan ID user yang sesuai
        ]);

        Batunesia::create([
            'nama_produk' => 'Batu Bronjol',
            'slug' => Str::random(10),
            'kategori' => 'Batu Hias',
            'panjang' => 20,
            'lebar' => 15,
            'diameter' => 10,
            'tinggi' => 25,
            'satuan' => 'pcs',
            'warna_1' => 'Abu-abu',
            'warna_2' => 'Tidak Ada',
            'gambar_1' => 'photos/batugambar1.jpg',
            'gambar_2' => 'photos/batugambar2.jpg',
            'gambar_3' => 'photos/batugambar3.jpg',
            'armada_minimum' => 'Kargo Mobil',
            'berat_gram' => '1000',
            'stok' => 50,
            'item_terjual' => 10,
            'penempatan' => 'Luar Ruangan',
            'deskripsi_singkat' => 'Deskripsi singkat batu alam Batu adalah benda alam yang tersusun atas kumpulan mineral penyusun kerak bumi yang menyatu secara padat maupun berserakan.',
            'harga_jual_projek_ideally' => 150000,
            'harga_b2I_31_unit' => 140000,
            'harga_b2I_11_unit' => 130000,
            'harga_b2I_1_unit' => 120000,
            'harga_b2B_31_unit' => 130000,
            'harga_b2B_11_unit' => 120000,
            'harga_b2B_1_unit' => 110000,
            'harga_b2C_31_unit' => 120000,
            'harga_b2C_11_unit' => 110000,
            'harga_b2C_1_unit' => 100000,
            'tanggal_publikasi' => $this->randomDateTimeInCurrentMonth($faker),
            'created_at' => now(),
            'created_by' => 1, // Ganti dengan ID user yang sesuai
        ]);

        Batunesia::create([
            'nama_produk' => 'Batu Fosil',
            'slug' => Str::random(10),
            'kategori' => 'Batu Hias',
            'panjang' => 20,
            'lebar' => 15,
            'diameter' => 10,
            'tinggi' => 25,
            'satuan' => 'pcs',
            'warna_1' => 'Abu-abu',
            'warna_2' => 'Tidak Ada',
            'gambar_1' => 'photos/batugambar1.jpg',
            'gambar_2' => 'photos/batugambar2.jpg',
            'gambar_3' => 'photos/batugambar3.jpg',
            'armada_minimum' => 'Kargo Mobil',
            'berat_gram' => '1000',
            'stok' => 50,
            'item_terjual' => 10,
            'penempatan' => 'Luar Ruangan',
            'deskripsi_singkat' => 'Deskripsi singkat batu alam Batu adalah benda alam yang tersusun atas kumpulan mineral penyusun kerak bumi yang menyatu secara padat maupun berserakan.',
            'harga_jual_projek_ideally' => 150000,
            'harga_b2I_31_unit' => 140000,
            'harga_b2I_11_unit' => 130000,
            'harga_b2I_1_unit' => 120000,
            'harga_b2B_31_unit' => 130000,
            'harga_b2B_11_unit' => 120000,
            'harga_b2B_1_unit' => 110000,
            'harga_b2C_31_unit' => 120000,
            'harga_b2C_11_unit' => 110000,
            'harga_b2C_1_unit' => 100000,
            'tanggal_publikasi' => $this->randomDateTimeInCurrentMonth($faker),
            'created_at' => now(),
            'created_by' => 1, // Ganti dengan ID user yang sesuai
        ]);

        Batunesia::create([
            'nama_produk' => 'Batu Garut',
            'slug' => Str::random(10),
            'kategori' => 'Batu Tempel',
            'panjang' => 20,
            'lebar' => 15,
            'diameter' => 10,
            'tinggi' => 25,
            'satuan' => 'm2',
            'warna_1' => 'Abu-abu',
            'warna_2' => 'Tidak Ada',
            'gambar_1' => 'photos/batugambar1.jpg',
            'gambar_2' => 'photos/batugambar2.jpg',
            'gambar_3' => 'photos/batugambar3.jpg',
            'armada_minimum' => 'Kargo Mobil',
            'berat_gram' => '1000',
            'stok' => 50,
            'item_terjual' => 10,
            'penempatan' => 'Luar Ruangan',
            'deskripsi_singkat' => 'Deskripsi singkat batu alam Batu adalah benda alam yang tersusun atas kumpulan mineral penyusun kerak bumi yang menyatu secara padat maupun berserakan.',
            'harga_jual_projek_ideally' => 150000,
            'harga_b2I_31_unit' => 140000,
            'harga_b2I_11_unit' => 130000,
            'harga_b2I_1_unit' => 120000,
            'harga_b2B_31_unit' => 130000,
            'harga_b2B_11_unit' => 120000,
            'harga_b2B_1_unit' => 110000,
            'harga_b2C_31_unit' => 120000,
            'harga_b2C_11_unit' => 110000,
            'harga_b2C_1_unit' => 100000,
            'tanggal_publikasi' => $this->randomDateTimeInCurrentMonth($faker),
            'created_at' => now(),
            'created_by' => 1, // Ganti dengan ID user yang sesuai
        ]);

        Batunesia::create([
            'nama_produk' => 'Batu Serai',
            'slug' => Str::random(10),
            'kategori' => 'Batu Tempel',
            'panjang' => 20,
            'lebar' => 15,
            'diameter' => 10,
            'tinggi' => 25,
            'satuan' => 'm2',
            'warna_1' => 'Abu-abu',
            'warna_2' => 'Tidak Ada',
            'gambar_1' => 'photos/batugambar1.jpg',
            'gambar_2' => 'photos/batugambar2.jpg',
            'gambar_3' => 'photos/batugambar3.jpg',
            'armada_minimum' => 'Kargo Mobil',
            'berat_gram' => '1000',
            'stok' => 50,
            'item_terjual' => 10,
            'penempatan' => 'Luar Ruangan',
            'deskripsi_singkat' => 'Deskripsi singkat batu alam Batu adalah benda alam yang tersusun atas kumpulan mineral penyusun kerak bumi yang menyatu secara padat maupun berserakan.',
            'harga_jual_projek_ideally' => 150000,
            'harga_b2I_31_unit' => 140000,
            'harga_b2I_11_unit' => 130000,
            'harga_b2I_1_unit' => 120000,
            'harga_b2B_31_unit' => 130000,
            'harga_b2B_11_unit' => 120000,
            'harga_b2B_1_unit' => 110000,
            'harga_b2C_31_unit' => 120000,
            'harga_b2C_11_unit' => 110000,
            'harga_b2C_1_unit' => 100000,
            'tanggal_publikasi' => $this->randomDateTimeInCurrentMonth($faker),
            'created_at' => now(),
            'created_by' => 1, // Ganti dengan ID user yang sesuai
        ]);

        Batunesia::create([
            'nama_produk' => 'Koral Hitam',
            'slug' => Str::random(10),
            'kategori' => 'Batu Hampar',
            'panjang' => 20,
            'lebar' => 15,
            'diameter' => 10,
            'tinggi' => 25,
            'satuan' => 'm2',
            'warna_1' => 'Abu-abu',
            'warna_2' => 'Tidak Ada',
            'gambar_1' => 'photos/batugambar1.jpg',
            'gambar_2' => 'photos/batugambar2.jpg',
            'gambar_3' => 'photos/batugambar3.jpg',
            'armada_minimum' => 'Kargo Mobil',
            'berat_gram' => '1000',
            'stok' => 50,
            'item_terjual' => 10,
            'penempatan' => 'Luar Ruangan',
            'deskripsi_singkat' => 'Deskripsi singkat batu alam Batu adalah benda alam yang tersusun atas kumpulan mineral penyusun kerak bumi yang menyatu secara padat maupun berserakan.',
            'harga_jual_projek_ideally' => 150000,
            'harga_b2I_31_unit' => 140000,
            'harga_b2I_11_unit' => 130000,
            'harga_b2I_1_unit' => 120000,
            'harga_b2B_31_unit' => 130000,
            'harga_b2B_11_unit' => 120000,
            'harga_b2B_1_unit' => 110000,
            'harga_b2C_31_unit' => 120000,
            'harga_b2C_11_unit' => 110000,
            'harga_b2C_1_unit' => 100000,
            'tanggal_publikasi' => $this->randomDateTimeInCurrentMonth($faker),
            'created_at' => now(),
            'created_by' => 1, // Ganti dengan ID user yang sesuai
        ]);

        Batunesia::create([
            'nama_produk' => 'Koral Itali',
            'slug' => Str::random(10),
            'kategori' => 'Batu Hampar',
            'panjang' => 20,
            'lebar' => 15,
            'diameter' => 10,
            'tinggi' => 25,
            'satuan' => 'm2',
            'warna_1' => 'Abu-abu',
            'warna_2' => 'Tidak Ada',
            'gambar_1' => 'photos/batugambar1.jpg',
            'gambar_2' => 'photos/batugambar2.jpg',
            'gambar_3' => 'photos/batugambar3.jpg',
            'armada_minimum' => 'Kargo Mobil',
            'berat_gram' => '1000',
            'stok' => 50,
            'item_terjual' => 10,
            'penempatan' => 'Luar Ruangan',
            'deskripsi_singkat' => 'Deskripsi singkat batu alam Batu adalah benda alam yang tersusun atas kumpulan mineral penyusun kerak bumi yang menyatu secara padat maupun berserakan.',
            'harga_jual_projek_ideally' => 150000,
            'harga_b2I_31_unit' => 140000,
            'harga_b2I_11_unit' => 130000,
            'harga_b2I_1_unit' => 120000,
            'harga_b2B_31_unit' => 130000,
            'harga_b2B_11_unit' => 120000,
            'harga_b2B_1_unit' => 110000,
            'harga_b2C_31_unit' => 120000,
            'harga_b2C_11_unit' => 110000,
            'harga_b2C_1_unit' => 100000,
            'tanggal_publikasi' => $this->randomDateTimeInCurrentMonth($faker),
            'created_at' => now(),
            'created_by' => 1, // Ganti dengan ID user yang sesuai
        ]);

        Batunesia::create([
            'nama_produk' => 'Batu Andesit Potong Rapih',
            'slug' => Str::random(10),
            'kategori' => 'Batu Tempel',
            'panjang' => 20,
            'lebar' => 15,
            'diameter' => 10,
            'tinggi' => 25,
            'satuan' => 'm2',
            'warna_1' => 'Abu-abu',
            'warna_2' => 'Tidak Ada',
            'gambar_1' => 'photos/batugambar1.jpg',
            'gambar_2' => 'photos/batugambar2.jpg',
            'gambar_3' => 'photos/batugambar3.jpg',
            'armada_minimum' => 'Kargo Mobil',
            'berat_gram' => '1000',
            'stok' => 50,
            'item_terjual' => 10,
            'penempatan' => 'Luar Ruangan',
            'deskripsi_singkat' => 'Deskripsi singkat batu alam Batu adalah benda alam yang tersusun atas kumpulan mineral penyusun kerak bumi yang menyatu secara padat maupun berserakan.',
            'harga_jual_projek_ideally' => 150000,
            'harga_b2I_31_unit' => 140000,
            'harga_b2I_11_unit' => 130000,
            'harga_b2I_1_unit' => 120000,
            'harga_b2B_31_unit' => 130000,
            'harga_b2B_11_unit' => 120000,
            'harga_b2B_1_unit' => 110000,
            'harga_b2C_31_unit' => 120000,
            'harga_b2C_11_unit' => 110000,
            'harga_b2C_1_unit' => 100000,
            'tanggal_publikasi' => $this->randomDateTimeInCurrentMonth($faker),
            'created_at' => now(),
            'created_by' => 1, // Ganti dengan ID user yang sesuai
        ]);

        Batunesia::create([
            'nama_produk' => 'Koral Pancawarna',
            'slug' => Str::random(10),
            'kategori' => 'Batu Hampar',
            'panjang' => 20,
            'lebar' => 15,
            'diameter' => 10,
            'tinggi' => 25,
            'satuan' => 'm2',
            'warna_1' => 'Abu-abu',
            'warna_2' => 'Tidak Ada',
            'gambar_1' => 'photos/batugambar1.jpg',
            'gambar_2' => 'photos/batugambar2.jpg',
            'gambar_3' => 'photos/batugambar3.jpg',
            'armada_minimum' => 'Kargo Mobil',
            'berat_gram' => '1000',
            'stok' => 50,
            'item_terjual' => 10,
            'penempatan' => 'Luar Ruangan',
            'deskripsi_singkat' => 'Deskripsi singkat batu alam Batu adalah benda alam yang tersusun atas kumpulan mineral penyusun kerak bumi yang menyatu secara padat maupun berserakan.',
            'harga_jual_projek_ideally' => 150000,
            'harga_b2I_31_unit' => 140000,
            'harga_b2I_11_unit' => 130000,
            'harga_b2I_1_unit' => 120000,
            'harga_b2B_31_unit' => 130000,
            'harga_b2B_11_unit' => 120000,
            'harga_b2B_1_unit' => 110000,
            'harga_b2C_31_unit' => 120000,
            'harga_b2C_11_unit' => 110000,
            'harga_b2C_1_unit' => 100000,
            'tanggal_publikasi' => $this->randomDateTimeInCurrentMonth($faker),
            'created_at' => now(),
            'created_by' => 1, // Ganti dengan ID user yang sesuai
        ]);

        Batunesia::create([
            'nama_produk' => 'Koral Pancawarna',
            'slug' => Str::random(10),
            'kategori' => 'Batu Hampar',
            'panjang' => 20,
            'lebar' => 15,
            'diameter' => 10,
            'tinggi' => 25,
            'satuan' => 'm2',
            'warna_1' => 'Abu-abu',
            'warna_2' => 'Tidak Ada',
            'gambar_1' => 'photos/batugambar1.jpg',
            'gambar_2' => 'photos/batugambar2.jpg',
            'gambar_3' => 'photos/batugambar3.jpg',
            'armada_minimum' => 'Kargo Mobil',
            'berat_gram' => '1000',
            'stok' => 50,
            'item_terjual' => 10,
            'penempatan' => 'Luar Ruangan',
            'deskripsi_singkat' => 'Deskripsi singkat batu alam Batu adalah benda alam yang tersusun atas kumpulan mineral penyusun kerak bumi yang menyatu secara padat maupun berserakan.',
            'harga_jual_projek_ideally' => 150000,
            'harga_b2I_31_unit' => 140000,
            'harga_b2I_11_unit' => 130000,
            'harga_b2I_1_unit' => 120000,
            'harga_b2B_31_unit' => 130000,
            'harga_b2B_11_unit' => 120000,
            'harga_b2B_1_unit' => 110000,
            'harga_b2C_31_unit' => 120000,
            'harga_b2C_11_unit' => 110000,
            'harga_b2C_1_unit' => 100000,
            'tanggal_publikasi' => $this->randomDateTimeInCurrentMonth($faker),
            'created_at' => now(),
            'created_by' => 1, // Ganti dengan ID user yang sesuai
        ]);

        Batunesia::create([
            'nama_produk' => 'Batu Paras Jogja Krem',
            'slug' => Str::random(10),
            'kategori' => 'Batu Tempel',
            'panjang' => 20,
            'lebar' => 15,
            'diameter' => 10,
            'tinggi' => 25,
            'satuan' => 'm2',
            'warna_1' => 'Krem',
            'warna_2' => 'Tidak Ada',
            'gambar_1' => 'photos/batugambar1.jpg',
            'gambar_2' => 'photos/batugambar2.jpg',
            'gambar_3' => 'photos/batugambar3.jpg',
            'armada_minimum' => 'Kargo Mobil',
            'berat_gram' => '1000',
            'stok' => 50,
            'item_terjual' => 10,
            'penempatan' => 'Luar Ruangan',
            'deskripsi_singkat' => 'Deskripsi singkat batu alam Batu adalah benda alam yang tersusun atas kumpulan mineral penyusun kerak bumi yang menyatu secara padat maupun berserakan.',
            'harga_jual_projek_ideally' => 150000,
            'harga_b2I_31_unit' => 140000,
            'harga_b2I_11_unit' => 130000,
            'harga_b2I_1_unit' => 120000,
            'harga_b2B_31_unit' => 130000,
            'harga_b2B_11_unit' => 120000,
            'harga_b2B_1_unit' => 110000,
            'harga_b2C_31_unit' => 120000,
            'harga_b2C_11_unit' => 110000,
            'harga_b2C_1_unit' => 100000,
            'tanggal_publikasi' => $this->randomDateTimeInCurrentMonth($faker),
            'created_at' => now(),
            'created_by' => 1, // Ganti dengan ID user yang sesuai
        ]);

        Batunesia::create([
            'nama_produk' => 'Batu Paras Jogja Putih',
            'slug' => Str::random(10),
            'kategori' => 'Batu Tempel',
            'panjang' => 20,
            'lebar' => 15,
            'diameter' => 10,
            'tinggi' => 25,
            'satuan' => 'm2',
            'warna_1' => 'Putih',
            'warna_2' => 'Tidak Ada',
            'gambar_1' => 'photos/batugambar1.jpg',
            'gambar_2' => 'photos/batugambar2.jpg',
            'gambar_3' => 'photos/batugambar3.jpg',
            'armada_minimum' => 'Kargo Mobil',
            'berat_gram' => '1000',
            'stok' => 50,
            'item_terjual' => 10,
            'penempatan' => 'Luar Ruangan',
            'deskripsi_singkat' => 'Deskripsi singkat batu alam Batu adalah benda alam yang tersusun atas kumpulan mineral penyusun kerak bumi yang menyatu secara padat maupun berserakan.',
            'harga_jual_projek_ideally' => 150000,
            'harga_b2I_31_unit' => 140000,
            'harga_b2I_11_unit' => 130000,
            'harga_b2I_1_unit' => 120000,
            'harga_b2B_31_unit' => 130000,
            'harga_b2B_11_unit' => 120000,
            'harga_b2B_1_unit' => 110000,
            'harga_b2C_31_unit' => 120000,
            'harga_b2C_11_unit' => 110000,
            'harga_b2C_1_unit' => 100000,
            'tanggal_publikasi' => $this->randomDateTimeInCurrentMonth($faker),
            'created_at' => now(),
            'created_by' => 1, // Ganti dengan ID user yang sesuai
        ]);

        Batunesia::create([
            'nama_produk' => 'Batu Paras Jogja Putih',
            'slug' => Str::random(10),
            'kategori' => 'Ornamen Batu',
            'panjang' => 20,
            'lebar' => 15,
            'diameter' => 10,
            'tinggi' => 25,
            'satuan' => 'm2',
            'warna_1' => 'Abu-abu',
            'warna_2' => 'Tidak Ada',
            'gambar_1' => 'photos/batugambar1.jpg',
            'gambar_2' => 'photos/batugambar2.jpg',
            'gambar_3' => 'photos/batugambar3.jpg',
            'armada_minimum' => 'Kargo Mobil',
            'berat_gram' => '1000',
            'stok' => 50,
            'item_terjual' => 10,
            'penempatan' => 'Luar Ruangan',
            'deskripsi_singkat' => 'Deskripsi singkat batu alam Batu adalah benda alam yang tersusun atas kumpulan mineral penyusun kerak bumi yang menyatu secara padat maupun berserakan.',
            'harga_jual_projek_ideally' => 150000,
            'harga_b2I_31_unit' => 140000,
            'harga_b2I_11_unit' => 130000,
            'harga_b2I_1_unit' => 120000,
            'harga_b2B_31_unit' => 130000,
            'harga_b2B_11_unit' => 120000,
            'harga_b2B_1_unit' => 110000,
            'harga_b2C_31_unit' => 120000,
            'harga_b2C_11_unit' => 110000,
            'harga_b2C_1_unit' => 100000,
            'tanggal_publikasi' => $this->randomDateTimeInCurrentMonth($faker),
            'created_at' => now(),
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
