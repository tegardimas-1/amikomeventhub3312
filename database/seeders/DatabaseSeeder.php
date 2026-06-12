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
        User::create([
            'name' => 'Admin Amikom',
            'email' => 'admin@amikom.ac.id',
            'password' => bcrypt('password123'),
            'role' => 'admin',
        ]);

        // 2. Regular User
        User::create([
            'name' => 'User Test',
            'email' => 'user@amikom.ac.id',
            'password' => bcrypt('password123'),
            'role' => 'user',
        ]);

        // 3. Categories
        $category1 = Category::create([
            'name' => 'Seminar IT',
            'slug' => 'seminar-it',
            'description' => 'Seminar seputar teknologi informasi',
        ]);

        $category2 = Category::create([
            'name' => 'Entertainment',
            'slug' => 'entertainment',
            'description' => 'Event hiburan dan musik',
        ]);

        $category3 = Category::create([
            'name' => 'Workshop',
            'slug' => 'workshop',
            'description' => 'Workshop praktis dan pelatihan',
        ]);

        
    }
}
