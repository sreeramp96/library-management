<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BookIssue>
 */
class BookIssueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $category = Category::inRandomOrder()->first();
        $author = Author::inRandomOrder()->first();
        $publisher = Publisher::inRandomOrder()->first();

        return [
            'name' => $this->faker->name(),
            'category_id' => $category ? $category->id : null,
            'author_id' => $author ? $author->id : null,
            'publisher_id' => $publisher ? $publisher->id : null,
            'status' => $this->faker->randomElement(['Y', 'N']),
            'created_at' => now(),
        ];
    }
}
