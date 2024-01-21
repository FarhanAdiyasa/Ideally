<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Batunesia;

class BatunesiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
<<<<<<< HEAD
        Batunesia::factory(100)->count(100)->create();
=======
        Batunesia::factory(100)->create();
>>>>>>> d5557992f1c905b8f774d6907a37c029ef4d4590
    }
}
