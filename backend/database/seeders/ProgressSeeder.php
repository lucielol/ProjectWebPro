<?php

namespace Database\Seeders;

use App\Models\ProgressModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProgressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProgressModel::insert([
            [
                'title' => 'Pemerintahan',
                'percentage' => 28
            ],
            [
                'title' => 'Pembinaan Kemasyarakatan',
                'percentage' => 12
            ],
            [
                'title' => 'Pembangunan',
                'percentage' => 65
            ],
            [
                'title' => 'Pemberdayaan Kemasyarakatan',
                'percentage' => 20
            ]
        ]);
    }
}
