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
                'name'           => 'Md Rasel',
                'email'          => 'admin@gmail.com',
                'email_verified_at' => now(),
                'password'       => Hash::make('password'),
                'remember_token' => Str::random(10),
            ],
            [
                'name'           => 'Vendor',
                'email'          => 'vendor@gmail.com',
                'email_verified_at' => now(),
                'password'       => Hash::make('password'),
                'remember_token' => Str::random(10),
            ],
            [
                'name'           => 'Customer',
                'email'          => 'customer@gmail.com',
                'email_verified_at' => now(),
                'password'       => Hash::make('password'),
                'remember_token' => Str::random(10),
            ],
        ];
        DB::table('users')->insert($users);
    }
}
