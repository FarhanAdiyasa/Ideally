<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Artikel;
use App\Models\Kategori_Artikel;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        
        Kategori_Artikel::create([
            'nama_kategori_artikel' => 'Desain-Taman'
        ]);
        Kategori_Artikel::create([
            'nama_kategori_artikel' => 'Konstruksi-Taman'
        ]);
        Kategori_Artikel::create([
            'nama_kategori_artikel' => 'Tanaman'
        ]);
        Kategori_Artikel::create([
            'nama_kategori_artikel' => 'Material'
        ]);
        Kategori_Artikel::create([
            'nama_kategori_artikel' => 'Pemeliharaan-Taman'
        ]);
        Artikel::factory(70)->create();
    }
}
