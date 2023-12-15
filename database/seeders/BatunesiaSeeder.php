<?php

namespace Database\Seeders;

use App\Models\Batunesia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BatunesiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Batunesia::factory()->count(50)->create();
    }
}
