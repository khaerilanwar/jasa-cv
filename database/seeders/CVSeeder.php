<?php

namespace Database\Seeders;

use App\Models\CV;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CVSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Generate model CV ATS
        for ($i = 1; $i <= 30; $i++) {
            CV::create(
                [
                    'code_name' => 'ATS-' . str_pad($i, 3, '0', STR_PAD_LEFT),
                    'favorite_number' => fake()->numberBetween(0, 35),
                    'category' => 'ats',
                    'image' => 'cv-ats/CV ATS ' . str_pad($i, 3, '0', STR_PAD_LEFT) . '.jpg'
                ]
            );
        }

        // Generate model CV Kreatif
        for ($j = 1; $j <= 56; $j++) {
            CV::create(
                [
                    'code_name' => 'CREATIVE-' . str_pad($j, 3, '0', STR_PAD_LEFT),
                    'favorite_number' => fake()->numberBetween(0, 35),
                    'category' => 'creative',
                    'image' => 'cv-creative/CV Kreatif ' . str_pad($j, 3, '0', STR_PAD_LEFT) . '.jpg'
                ]
            );
        }
    }
}
