<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;
    //lupa pesan commit
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Admin User
        User::updateOrCreate(
            ['email' => 'admin@amikom.ac.id'],
            [
                'name' => 'Admin Amikom',
                'password' => bcrypt('password123'),
                'role' => 'admin',
            ]
        );

        // 2. Regular User
        User::updateOrCreate(
            ['email' => 'user@amikom.ac.id'],
            [
                'name' => 'User Test',
                'password' => bcrypt('password123'),
                'role' => 'user',
            ]
        );

        // 3. Categories
        Category::updateOrCreate(
            ['slug' => 'seminar-it'],
            [
                'name' => 'Seminar IT',
                'description' => 'Seminar seputar teknologi informasi',
            ]
        );

        Category::updateOrCreate(
            ['slug' => 'entertainment'],
            [
                'name' => 'Entertainment',
                'description' => 'Event hiburan dan musik',
            ]
        );

        Category::updateOrCreate(
            ['slug' => 'workshop'],
            [
                'name' => 'Workshop',
                'description' => 'Workshop praktis dan pelatihan',
            ]
        );

        
    }
}
