<?php

namespace Database\Seeders;

use App\Models\DeliveryAddress;
use App\Models\DeliveryNumber;
use App\Models\DeliverySchedule;
use Illuminate\Database\Seeder;

class DeliverySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $delivery_addresses = [
            [
                'address_type' => 'Home',
                'address' => 'Wolfson Institute of Preventive Medicine, London EC1M 7BA, UK',
                'user_id'=>3,
            ],
            [
                'address_type' => 'Office',
                'address' => 'Wolfson Institute of Preventive Medicine, London EC1M 7BA, UK',
                'user_id'=>3,
            ],
        ];
        $phone_numbers = [
            [
                'number_type'=>'Home',
                'number'=>'01781844900',
                'user_id'=>3,
            ],
            [
                'number_type'=>'Office',
                'number'=>'01303132018',
                'user_id'=>3,
            ],
        ];
        $delivery_schedules = [
            [
                'schedule_name'=>'Express Delivery',
                'schedule'=>'90 min express delivery',
            ],
            [
                'schedule_name'=>'Morning',
                'schedule'=>'8.00 AM - 11.00 AM',
            ],
            [
                'schedule_name'=>'Noon',
                'schedule'=>'11.00 AM - 2.00 PM',
            ],
            [
                'schedule_name'=>'Afternoon',
                'schedule'=>'2.00 PM - 5.00 PM',
            ],
            [
                'schedule_name'=>'Evening',
                'schedule'=>'5.00 PM - 8.00 PM',
            ],
        ];
        DeliverySchedule::insert($delivery_schedules);
        DeliveryNumber::insert($phone_numbers);
        DeliveryAddress::insert($delivery_addresses);
    }
}
