<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            RolesAndPermisisonsCombinedSeeder::class,
            DeliverySeeder::class,
            SettingSeeder::class,
        ]);
        \App\Models\Shop::factory(9)->create();
        \App\Models\Category::factory(10)->create();
        \App\Models\Product::factory(50)->create();
    }
}
