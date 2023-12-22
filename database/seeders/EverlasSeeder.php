<?php

namespace Database\Seeders;

use App\Models\Everlas_Things;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class EverlasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Everlas_Things::factory(100)->count(100)->create();
    }
}
