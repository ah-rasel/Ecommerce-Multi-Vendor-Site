<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Md Rasel',
                'email' => 'admin@gmail.com',
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
                'password'       => Hash::make('password'),
                'remember_token' => Str::random(10),
            ],
            [
                'name' => 'Vendor',
                'email' => 'vendor@gmail.com',
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
                'password'       => Hash::make('password'),
                'remember_token' => Str::random(10),
            ],
            [
                'name' => 'Customer',
                'email' => 'customer@gmail.com',
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
                'password'       => Hash::make('password'),
                'remember_token' => Str::random(10),
            ],
        ];
        $shops = [
            [
                'name' => $var = 'Main Shop',
                'slug' => Str::slug($var),
                'tag_line' => "A perfect place to get your product",
                'logo' => 'shops/17.png',
                'address' => "Uttara Sector 10",
                'banner' => 'shops/shop-banner-1.jpg',
                'phone' => "01303132018",
                'user_id' => 1,
            ],
        ];
        DB::table('users')->insert($users);
        DB::table('shops')->insert($shops);
    }
}
