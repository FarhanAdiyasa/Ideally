<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Artikel;
use App\Models\detail_komentar;
use App\Models\Kategori_Artikel;
use App\Models\Komentar;
use App\Models\Sumber_Artikel;
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
            'nama_kategori_artikel' => 'Desain-Taman',
            'judul_kategori_artikel' => 'Lorem Desain-Taman ipsum dolor sit, amet consectetur adipisicing elit.',
            'deskripsi_kategori_artikel' =>'Lorem Desain-Taman ipsum dolor sit, amet consectetur adipisicing elit. Debitis aperiam eum unde id. Dolorum, alias nam debitis architecto cupiditate rem quos maiores repellat dicta fuga laudantium facilis nostrum corrupti placeat!'
        ]);
        Kategori_Artikel::create([
            'nama_kategori_artikel' => 'Konstruksi-Taman',
            'judul_kategori_artikel' => 'Lorem Desain-Taman ipsum dolor sit, amet consectetur adipisicing elit.',
            'deskripsi_kategori_artikel' =>'Lorem Konstruksi-Taman ipsum dolor sit, amet consectetur adipisicing elit. Debitis aperiam eum unde id. Dolorum, alias nam debitis architecto cupiditate rem quos maiores repellat dicta fuga laudantium facilis nostrum corrupti placeat!'
        ]);
        Kategori_Artikel::create([
            'nama_kategori_artikel' => 'Tanaman',
            'judul_kategori_artikel' => 'Lorem Desain-Taman ipsum dolor sit, amet consectetur adipisicing elit.',
            'deskripsi_kategori_artikel' =>'Lorem Tanaman ipsum dolor sit, amet consectetur adipisicing elit. Debitis aperiam eum unde id. Dolorum, alias nam debitis architecto cupiditate rem quos maiores repellat dicta fuga laudantium facilis nostrum corrupti placeat!'
        ]);
        Kategori_Artikel::create([
            'nama_kategori_artikel' => 'Material',
            'judul_kategori_artikel' => 'Lorem Desain-Taman ipsum dolor sit, amet consectetur adipisicing elit.',
            'deskripsi_kategori_artikel' =>'Lorem Material ipsum dolor sit, amet consectetur adipisicing elit. Debitis aperiam eum unde id. Dolorum, alias nam debitis architecto cupiditate rem quos maiores repellat dicta fuga laudantium facilis nostrum corrupti placeat!'
        ]);
        Kategori_Artikel::create([
            'nama_kategori_artikel' => 'Pemeliharaan-Taman',
            'judul_kategori_artikel' => 'Lorem Desain-Taman ipsum dolor sit, amet consectetur adipisicing elit.',
            'deskripsi_kategori_artikel' =>'Lorem Pemeliharaan-Taman ipsum dolor sit, amet consectetur adipisicing elit. Debitis aperiam eum unde id. Dolorum, alias nam debitis architecto cupiditate rem quos maiores repellat dicta fuga laudantium facilis nostrum corrupti placeat!'
        ]);
        Artikel::factory(20)->create();
        Komentar::factory(30)->create();
        Sumber_Artikel::factory(40)->create();
    }
}
