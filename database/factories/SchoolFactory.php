<?php

namespace Database\Factories;

use App\Models\SchoolTag;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class SchoolFactory extends Factory
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
            'photo' => $this->faker->unique()->numberBetween(1,13).'.jpg',
            'condition' => $this->faker->randomElement(['top school', 'top choice', 'best school', 'new']),
            'is_featured' => $this->faker->numberBetween(0,1),
            'tag_id' => $this->faker->randomElement(SchoolTag::pluck('id')->toArray()),
        ];
    }
}
