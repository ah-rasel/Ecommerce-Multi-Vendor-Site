<?php

namespace Database\Factories;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\Factory;

class ShopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $var = "Shop - " . $this->faker->name(),
            'slug' => Str::slug($var),
            'tag_line' => $this->faker->text(50),
            'logo' => 'shops/17.png',
            'address' => $this->faker->address(),
            'banner' => 'shops/shop-banner-1.jpg',
            'phone' => $this->faker->phoneNumber(),
            'user_id' => rand(1,3),
        ];
    }
}
