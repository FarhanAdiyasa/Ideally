<?php

namespace Database\Seeders;

use App\Models\Agrigard;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class RealAgrigardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        Agrigard::create([
            'kategori' => 'Alat Kerja',
            'nama_produk' => 'Turus Moss',
            'slug' => Str::random(10),
            'spesifikasi' => 'Contoh Spesifikasi',
            'satuan' => 'pack',
            'gambar_1' => 'photos/agrigardgambar1.jpg',
            'gambar_2' => 'photos/agrigardgambar2.jpg',
            'gambar_3' => 'photos/agrigardgambar3.jpg',
            'video' => 'video.mp4',
            'deskripsi_singkat' => 'Deskripsi singkat Agrigard media tanam alat kerja membantu penyiraman',
            'stok' => 50,
            'item_terjual' => 10,
            'armada_minimum' => 'Motor',
            'berat_gram' => 500,
            'harga_jual_projek_ideally' => 120000,
            'harga_b2I_31_unit' => 110000,
            'harga_b2I_11_unit' => 100000,
            'harga_b2I_1_unit' => 90000,
            'harga_b2B_31_unit' => 100000,
            'harga_b2B_11_unit' => 90000,
            'harga_b2B_1_unit' => 80000,
            'harga_b2C_31_unit' => 90000,
            'harga_b2C_11_unit' => 80000,
            'harga_b2C_1_unit' => 70000,
            'tanggal_publikasi' => $this->randomDateTimeInCurrentMonth($faker),
            'created_at' => $this->randomDateTimeInCurrentMonth($faker),
            'created_by' => 1, // Ganti dengan ID user yang sesuai
        ]);

        Agrigard::create([
            'kategori' => 'Media Tanam',
            'nama_produk' => 'Ijuk',
            'slug' => Str::random(10),
            'spesifikasi' => 'Contoh Spesifikasi',
            'satuan' => 'karung',
            'gambar_1' => 'photos/agrigardgambar1.jpg',
            'gambar_2' => 'photos/agrigardgambar2.jpg',
            'gambar_3' => 'photos/agrigardgambar3.jpg',
            'video' => 'video.mp4',
            'deskripsi_singkat' => 'Deskripsi singkat Agrigard media tanam alat kerja membantu penyiraman',
            'stok' => 50,
            'item_terjual' => 10,
            'armada_minimum' => 'Motor',
            'berat_gram' => 500,
            'harga_jual_projek_ideally' => 120000,
            'harga_b2I_31_unit' => 110000,
            'harga_b2I_11_unit' => 100000,
            'harga_b2I_1_unit' => 90000,
            'harga_b2B_31_unit' => 100000,
            'harga_b2B_11_unit' => 90000,
            'harga_b2B_1_unit' => 80000,
            'harga_b2C_31_unit' => 90000,
            'harga_b2C_11_unit' => 80000,
            'harga_b2C_1_unit' => 70000,
            'tanggal_publikasi' => $this->randomDateTimeInCurrentMonth($faker),
            'created_at' => $this->randomDateTimeInCurrentMonth($faker),
            'created_by' => 1, // Ganti dengan ID user yang sesuai
        ]);

        Agrigard::create([
            'kategori' => 'Media Tanam',
            'nama_produk' => 'Sekam mentah',
            'slug' => Str::random(10),
            'spesifikasi' => 'Contoh Spesifikasi',
            'satuan' => 'karung',
            'gambar_1' => 'photos/agrigardgambar1.jpg',
            'gambar_2' => 'photos/agrigardgambar2.jpg',
            'gambar_3' => 'photos/agrigardgambar3.jpg',
            'video' => 'video.mp4',
            'deskripsi_singkat' => 'Deskripsi singkat Agrigard media tanam alat kerja membantu penyiraman',
            'stok' => 50,
            'item_terjual' => 10,
            'armada_minimum' => 'Motor',
            'berat_gram' => 500,
            'harga_jual_projek_ideally' => 120000,
            'harga_b2I_31_unit' => 110000,
            'harga_b2I_11_unit' => 100000,
            'harga_b2I_1_unit' => 90000,
            'harga_b2B_31_unit' => 100000,
            'harga_b2B_11_unit' => 90000,
            'harga_b2B_1_unit' => 80000,
            'harga_b2C_31_unit' => 90000,
            'harga_b2C_11_unit' => 80000,
            'harga_b2C_1_unit' => 70000,
            'tanggal_publikasi' => $this->randomDateTimeInCurrentMonth($faker),
            'created_at' => $this->randomDateTimeInCurrentMonth($faker),
            'created_by' => 1, // Ganti dengan ID user yang sesuai
        ]);

        Agrigard::create([
            'kategori' => 'Media Tanam',
            'nama_produk' => 'Turus Lilit',
            'slug' => Str::random(10),
            'spesifikasi' => 'Contoh Spesifikasi',
            'satuan' => 'karung',
            'gambar_1' => 'photos/agrigardgambar1.jpg',
            'gambar_2' => 'photos/agrigardgambar2.jpg',
            'gambar_3' => 'photos/agrigardgambar3.jpg',
            'video' => 'video.mp4',
            'deskripsi_singkat' => 'Deskripsi singkat Agrigard media tanam alat kerja membantu penyiraman',
            'stok' => 50,
            'item_terjual' => 10,
            'armada_minimum' => 'Motor',
            'berat_gram' => 500,
            'harga_jual_projek_ideally' => 120000,
            'harga_b2I_31_unit' => 110000,
            'harga_b2I_11_unit' => 100000,
            'harga_b2I_1_unit' => 90000,
            'harga_b2B_31_unit' => 100000,
            'harga_b2B_11_unit' => 90000,
            'harga_b2B_1_unit' => 80000,
            'harga_b2C_31_unit' => 90000,
            'harga_b2C_11_unit' => 80000,
            'harga_b2C_1_unit' => 70000,
            'tanggal_publikasi' => $this->randomDateTimeInCurrentMonth($faker),
            'created_at' => $this->randomDateTimeInCurrentMonth($faker),
            'created_by' => 1, // Ganti dengan ID user yang sesuai
        ]);

        Agrigard::create([
            'kategori' => 'Obat dan Nutrisi',
            'nama_produk' => 'Furadan',
            'slug' => Str::random(10),
            'spesifikasi' => 'Contoh Spesifikasi',
            'satuan' => 'pcs',
            'gambar_1' => 'photos/agrigardgambar1.jpg',
            'gambar_2' => 'photos/agrigardgambar2.jpg',
            'gambar_3' => 'photos/agrigardgambar3.jpg',
            'video' => 'video.mp4',
            'deskripsi_singkat' => 'Deskripsi singkat Agrigard media tanam alat kerja membantu penyiraman',
            'stok' => 50,
            'item_terjual' => 10,
            'armada_minimum' => 'Motor',
            'berat_gram' => 500,
            'harga_jual_projek_ideally' => 120000,
            'harga_b2I_31_unit' => 110000,
            'harga_b2I_11_unit' => 100000,
            'harga_b2I_1_unit' => 90000,
            'harga_b2B_31_unit' => 100000,
            'harga_b2B_11_unit' => 90000,
            'harga_b2B_1_unit' => 80000,
            'harga_b2C_31_unit' => 90000,
            'harga_b2C_11_unit' => 80000,
            'harga_b2C_1_unit' => 70000,
            'tanggal_publikasi' => $this->randomDateTimeInCurrentMonth($faker),
            'created_at' => $this->randomDateTimeInCurrentMonth($faker),
            'created_by' => 1, // Ganti dengan ID user yang sesuai
        ]);

        Agrigard::create([
            'kategori' => 'Obat dan Nutrisi',
            'nama_produk' => 'Liquinox Vitamin B1',
            'slug' => Str::random(10),
            'spesifikasi' => 'Contoh Spesifikasi',
            'satuan' => 'pcs',
            'gambar_1' => 'photos/agrigardgambar1.jpg',
            'gambar_2' => 'photos/agrigardgambar2.jpg',
            'gambar_3' => 'photos/agrigardgambar3.jpg',
            'video' => 'video.mp4',
            'deskripsi_singkat' => 'Deskripsi singkat Agrigard media tanam alat kerja membantu penyiraman',
            'stok' => 50,
            'item_terjual' => 10,
            'armada_minimum' => 'Motor',
            'berat_gram' => 500,
            'harga_jual_projek_ideally' => 120000,
            'harga_b2I_31_unit' => 110000,
            'harga_b2I_11_unit' => 100000,
            'harga_b2I_1_unit' => 90000,
            'harga_b2B_31_unit' => 100000,
            'harga_b2B_11_unit' => 90000,
            'harga_b2B_1_unit' => 80000,
            'harga_b2C_31_unit' => 90000,
            'harga_b2C_11_unit' => 80000,
            'harga_b2C_1_unit' => 70000,
            'tanggal_publikasi' => $this->randomDateTimeInCurrentMonth($faker),
            'created_at' => $this->randomDateTimeInCurrentMonth($faker),
            'created_by' => 1, // Ganti dengan ID user yang sesuai
        ]);

        Agrigard::create([
            'kategori' => 'Obat dan Nutrisi',
            'nama_produk' => 'NPK Mutiara',
            'slug' => Str::random(10),
            'spesifikasi' => 'Contoh Spesifikasi',
            'satuan' => 'pcs',
            'gambar_1' => 'photos/agrigardgambar1.jpg',
            'gambar_2' => 'photos/agrigardgambar2.jpg',
            'gambar_3' => 'photos/agrigardgambar3.jpg',
            'video' => 'video.mp4',
            'deskripsi_singkat' => 'Deskripsi singkat Agrigard media tanam alat kerja membantu penyiraman',
            'stok' => 50,
            'item_terjual' => 10,
            'armada_minimum' => 'Motor',
            'berat_gram' => 500,
            'harga_jual_projek_ideally' => 120000,
            'harga_b2I_31_unit' => 110000,
            'harga_b2I_11_unit' => 100000,
            'harga_b2I_1_unit' => 90000,
            'harga_b2B_31_unit' => 100000,
            'harga_b2B_11_unit' => 90000,
            'harga_b2B_1_unit' => 80000,
            'harga_b2C_31_unit' => 90000,
            'harga_b2C_11_unit' => 80000,
            'harga_b2C_1_unit' => 70000,
            'tanggal_publikasi' => $this->randomDateTimeInCurrentMonth($faker),
            'created_at' => $this->randomDateTimeInCurrentMonth($faker),
            'created_by' => 1, // Ganti dengan ID user yang sesuai
        ]);

        Agrigard::create([
            'kategori' => 'Obat dan Nutrisi',
            'nama_produk' => 'Turus Serabut',
            'slug' => Str::random(10),
            'spesifikasi' => 'Contoh Spesifikasi',
            'satuan' => 'pcs',
            'gambar_1' => 'photos/agrigardgambar1.jpg',
            'gambar_2' => 'photos/agrigardgambar2.jpg',
            'gambar_3' => 'photos/agrigardgambar3.jpg',
            'video' => 'video.mp4',
            'deskripsi_singkat' => 'Deskripsi singkat Agrigard media tanam alat kerja membantu penyiraman',
            'stok' => 50,
            'item_terjual' => 10,
            'armada_minimum' => 'Motor',
            'berat_gram' => 500,
            'harga_jual_projek_ideally' => 120000,
            'harga_b2I_31_unit' => 110000,
            'harga_b2I_11_unit' => 100000,
            'harga_b2I_1_unit' => 90000,
            'harga_b2B_31_unit' => 100000,
            'harga_b2B_11_unit' => 90000,
            'harga_b2B_1_unit' => 80000,
            'harga_b2C_31_unit' => 90000,
            'harga_b2C_11_unit' => 80000,
            'harga_b2C_1_unit' => 70000,
            'tanggal_publikasi' => $this->randomDateTimeInCurrentMonth($faker),
            'created_at' => $this->randomDateTimeInCurrentMonth($faker),
            'created_by' => 1, // Ganti dengan ID user yang sesuai
        ]);

        Agrigard::create([
            'kategori' => 'Pot Plastik',
            'nama_produk' => 'Turus Lilit',
            'slug' => Str::random(10),
            'spesifikasi' => 'Contoh Spesifikasi',
            'satuan' => 'pack',
            'gambar_1' => 'photos/agrigardgambar1.jpg',
            'gambar_2' => 'photos/agrigardgambar2.jpg',
            'gambar_3' => 'photos/agrigardgambar3.jpg',
            'video' => 'video.mp4',
            'deskripsi_singkat' => 'Deskripsi singkat Agrigard media tanam alat kerja membantu penyiraman',
            'stok' => 50,
            'item_terjual' => 10,
            'armada_minimum' => 'Motor',
            'berat_gram' => 500,
            'harga_jual_projek_ideally' => 120000,
            'harga_b2I_31_unit' => 110000,
            'harga_b2I_11_unit' => 100000,
            'harga_b2I_1_unit' => 90000,
            'harga_b2B_31_unit' => 100000,
            'harga_b2B_11_unit' => 90000,
            'harga_b2B_1_unit' => 80000,
            'harga_b2C_31_unit' => 90000,
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
