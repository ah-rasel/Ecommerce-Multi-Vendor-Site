<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $var = "category - " . $this->faker->name(),
            'slug' => Str::slug($var),
            'image' => 'products/' . $this->faker->numberBetween(1, 9) . '.png',
        ];
    }
}
