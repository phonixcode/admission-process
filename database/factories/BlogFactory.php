<?php

namespace Database\Factories;

use App\Models\BlogCategory;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->unique()->words($nb=1,$asText=true);
        $slug = Str::slug($title);

        return [
            'title' => $title,
            'slug' => $slug,
            'summary' => $this->faker->paragraphs(9, true),
            'description' => $this->faker->paragraphs(9, true),
            'photo' => $this->faker->unique()->numberBetween(1,4).'.jpg',
            'cat_id' => $this->faker->randomElement(BlogCategory::pluck('id')->toArray()),
        ];
    }
}
