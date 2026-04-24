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

        // 4. Events
        Event::create([
            'category_id' => $category1->id,
            'title' => 'AI Summit 2026',
            'description' => 'Event teknologi AI dengan pembicara internasional',
            'date' => '2026-05-01 10:00:00',
            'location' => 'Amikom Convention Center',
            'price' => 50000,
            'stock' => 100,
        ]);

        Event::create([
            'category_id' => $category2->id,
            'title' => 'Music Fest 2026',
            'description' => 'Festival musik dengan artis lokal dan internasional',
            'date' => '2026-06-15 18:00:00',
            'location' => 'Gedung Kesenian Amikom',
            'price' => 75000,
            'stock' => 200,
        ]);

        Event::create([
            'category_id' => $category3->id,
            'title' => 'Web Development Workshop',
            'description' => 'Workshop membuat website dengan Laravel',
            'date' => '2026-04-30 09:00:00',
            'location' => 'Lab Komputer Amikom',
            'price' => 35000,
            'stock' => 50,
        ]);
    }
}
