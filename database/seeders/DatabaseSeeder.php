<?php

namespace Database\Seeders;

use App\Models\Testimoni;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // Generate user admin
        User::factory()->create([
            'name' => 'Administrator',
            'email' => 'administrator@jasa.com',
            'password' => Hash::make('password'),
        ]);

        // Generate model cv
        $this->call(CVSeeder::class);

        // Generate model testimoni
        Testimoni::factory(57)->create();

        // Generatecode review
        $this->call(CodeReviewSeeder::class);
    }
}
