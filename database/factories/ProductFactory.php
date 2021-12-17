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
            'name' => $var = "product - ".$this->faker->name(),
            'slug' => Str::slug($var),
            'description'=>$this->faker->text(200),
            'sku'=>$this->faker->text(5),
            'price'=>$this->faker->numberBetween(100,500),
            'category_id'=>$this->faker->numberBetween(1,10),
        ];
    }
}
