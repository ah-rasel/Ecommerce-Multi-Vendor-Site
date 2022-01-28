<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $sliders = [
            [
                'main' => 'Welcome to Fashion',
                'tag' => 'Man Fashion',
                'image' => 'slider/1.jpg',
            ],
            [
                'main' => 'Welcome to Fashion',
                'tag' => 'Women Fashion',
                'image' => 'slider/2.jpg',
            ],
        ];
        $slider_values = serialize($sliders);
        $settings = [
            [
                'name'=>'sliders',
                'value'=>$slider_values,
            ]
        ];
        Setting::insert($settings);
    }
}
