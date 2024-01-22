<?php

namespace Database\Seeders;

use Database\Factories\BatunesiaFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Batunesia;
use App\Models\Order;

class BatunesiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Batunesia::factory(100)->create();
    }
}
