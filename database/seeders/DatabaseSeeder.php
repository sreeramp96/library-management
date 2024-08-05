<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use App\Models\BookIssue;
use App\Models\Category;
use App\Models\Publisher;
use App\Models\Student;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        Category::factory(10)->create();
        Student::factory(10)->create();
        Author::factory(10)->create();
        Publisher::factory(10)->create();
        Book::factory(10)->create();
    }
}
