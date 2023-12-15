<?php

namespace Database\Seeders;

use App\Models\Everlas_Things;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Everlas_ThingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userId = 1;
        Everlas_Things::factory()
            ->count(50)
            ->create([
                'created_by' => $userId,
                'updated_by' => $userId,
                'deleted_by' => $userId,
                
            ]);
    }
}
