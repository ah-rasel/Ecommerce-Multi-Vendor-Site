<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $var = "product - " . $this->faker->randomNumber(4),
            'slug' => Str::slug($var),
            'description' => $this->faker->text(200),
            'sku' => $this->faker->text(5),
            'quantity' => $this->faker->numberBetween(5, 50),
            'current_price' => $this->faker->numberBetween(100, 500),
            'regular_price' => $this->faker->numberBetween(100, 500),
            'category_id' => $this->faker->numberBetween(1, 10),
            'shop_id' => $this->faker->numberBetween(1, 8),
            'image' => 'products/' . $this->faker->numberBetween(1, 9) . '.png',
        ];
    }
}
