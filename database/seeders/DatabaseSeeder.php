<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Agrigard;
use App\Models\Artikel;
use App\Models\Artikel_Kategori;
use App\Models\Batunesia;
use App\Models\Dedikasi_Flora;
use App\Models\Everlas_Things;
use App\Models\Kategori_Artikel;
use App\Models\Komentar;
use App\Models\Konkurito;
use App\Models\Promo;
use App\Models\Rating_Artikel;
use App\Models\Shineage;
use App\Models\Sumber_Artikel;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // User::factory(10)->create();
        
        // Kategori_Artikel::create([
        //     'nama_katkegori_artikel' => 'Desain-Taman',
        //     'judul_kategori_artikel' => 'Lorem Desain-Taman ipsum dolor sit, amet consectetur adipisicing elit.',
        //     'deskripsi_kategori_artikel' =>'Lorem Desain-Taman ipsum dolor sit, amet consectetur adipisicing elit. Debitis aperiam eum unde id. Dolorum, alias nam debitis architecto cupiditate rem quos maiores repellat dicta fuga laudantium facilis nostrum corrupti placeat!'
        // ]);
        // Kategori_Artikel::create([
        //     'nama_kategori_artikel' => 'Konstruksi-Taman',
        //     'judul_kategori_artikel' => 'Lorem Desain-Taman ipsum dolor sit, amet consectetur adipisicing elit.',
        //     'deskripsi_kategori_artikel' =>'Lorem Konstruksi-Taman ipsum dolor sit, amet consectetur adipisicing elit. Debitis aperiam eum unde id. Dolorum, alias nam debitis architecto cupiditate rem quos maiores repellat dicta fuga laudantium facilis nostrum corrupti placeat!'
        // ]);
        // Kategori_Artikel::create([
        //     'nama_kategori_artikel' => 'Tanaman',
        //     'judul_kategori_artikel' => 'Lorem Desain-Taman ipsum dolor sit, amet consectetur adipisicing elit.',
        //     'deskripsi_kategori_artikel' =>'Lorem Tanaman ipsum dolor sit, amet consectetur adipisicing elit. Debitis aperiam eum unde id. Dolorum, alias nam debitis architecto cupiditate rem quos maiores repellat dicta fuga laudantium facilis nostrum corrupti placeat!'
        // ]);
        // Kategori_Artikel::create([
        //     'nama_kategori_artikel' => 'Material',
        //     'judul_kategori_artikel' => 'Lorem Desain-Taman ipsum dolor sit, amet consectetur adipisicing elit.',
        //     'deskripsi_kategori_artikel' =>'Lorem Material ipsum dolor sit, amet consectetur adipisicing elit. Debitis aperiam eum unde id. Dolorum, alias nam debitis architecto cupiditate rem quos maiores repellat dicta fuga laudantium facilis nostrum corrupti placeat!'
        // ]);
        // Kategori_Artikel::create([
        //     'nama_kategori_artikel' => 'Pemeliharaan-Taman',
        //     'judul_kategori_artikel' => 'Lorem Desain-Taman ipsum dolor sit, amet consectetur adipisicing elit.',
        //     'deskripsi_kategori_artikel' =>'Lorem Pemeliharaan-Taman ipsum dolor sit, amet consectetur adipisicing elit. Debitis aperiam eum unde id. Dolorum, alias nam debitis architecto cupiditate rem quos maiores repellat dicta fuga laudantium facilis nostrum corrupti placeat!'
        // ]);
        // Kategori_Artikel::create([
        //     'nama_kategori_artikel' => 'Lainnya',
        //     'judul_kategori_artikel' => 'Lorem Desain-Taman ipsum dolor sit, amet consectetur adipisicing elit.',
        //     'deskripsi_kategori_artikel' =>'Lorem Lainnya ipsum dolor sit, amet consectetur adipisicing elit. Debitis aperiam eum unde id. Dolorum, alias nam debitis architecto cupiditate rem quos maiores repellat dicta fuga laudantium facilis nostrum corrupti placeat!'
        // ]);
        // Artikel::factory(100)->create();
        // Artikel_Kategori::factory(200)->create();

        // Komentar::factory(30)->create();
        // Sumber_Artikel::factory(40)->create();
        // Rating_Artikel::factory(140)->create();

        // Agrigard::factory(40)->create();
        // Konkurito::factory(40)->create();
        // Dedikasi_Flora::factory(40)->create();
        // Shineage::factory(40)->create();
        // Everlas_Things::factory(40)->create();
        // Batunesia::factory(40)->create();
        // Promo::factory(10)->create()->each(function ($promo) {
        //     $promo->nurseris()->attach(Dedikasi_Flora::pluck('id_nurseri')->toArray());
        //     $promo->batunesias()->attach(Batunesia::pluck('id_batu')->toArray());
        //     $promo->konkuritos()->attach(Konkurito::pluck('id_konkurito')->toArray());
        //     $promo->everlass()->attach(Everlas_Things::pluck('id_everlas_things')->toArray());
        //     $promo->shineages()->attach(Shineage::pluck('id_shineage')->toArray());
        //     $promo->agrigards()->attach(Agrigard::pluck('id_agrigard')->toArray());
        // });
        // $userData = [
        //     'email' => 'ideally@gmail.com',
        //     'password' => bcrypt('12345'),
        //     'google_id' => 'google123',
        //     'firstname' => 'John',
        //     'lastname' => 'Doe',
        //     'address' => '123 Main St',
        //     'telephone_number' => '123456789',
        //     'birthdate' => '1990-01-01',
        //     'gender' => 'male',
        //     'profesi' => 'Developer',
        //     'profile_picture' => 'path/to/picture.jpg',
        //     'provinsi' => 'Example Province',
        //     'kabupaten' => 'Example Regency',
        //     'kecamatan' => 'Example District',
        //     'kelurahan' => 'Example Village',
        //     'role' => 'admin',
        //     'email_verified_at' => now(), // Assuming email is verified at the time of creation
        // ];
        $userData = [
            'email' => 'user@gmail.com',
            'password' => bcrypt('12345'),
            'google_id' => 'google123',
            'firstname' => 'Farhan',
            'lastname' => 'Adiyasa',
            'address' => '123 Main St',
            'telephone_number' => '123456789',
            'birthdate' => '1990-01-01',
            'gender' => 'male',
            'profesi' => 'Developer',
            'profile_picture' => 'Storage/Photos/Foto.jpg',
            'provinsi' => 'Example Province',
            'kabupaten' => 'Example Regency',
            'kecamatan' => 'Example District',
            'kelurahan' => 'Example Village',
            'role' => 'admin',
            'email_verified_at' => now(), // Assuming email is verified at the time of creation
        ];
        User::create($userData);        
    }
}
