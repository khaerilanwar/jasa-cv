<?php

namespace Database\Seeders;

use App\Models\CodeReview;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CodeReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 5; $i++) {
            CodeReview::create(
                [
                    'code' => fake()->randomNumber(5, true),
                    'used' => false,
                    // 'testi_id' => fake()->numberBetween(1, 10)
                ]
            );
        }
        for ($i = 0; $i < 15; $i++) {
            CodeReview::create(
                [
                    'code' => fake()->randomNumber(5, true),
                    'used' => true,
                    // 'testi_id' => fake()->numberBetween(1, 10)
                ]
            );
        }
    }
}
