<?php

use App\Service;
use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    public function run()
    {
        $services = [
            [
                'id'    => 1,
                'service_name' => 'Checkup/Consultation',
                'price' => '500'
            ],
        ];

        Service::insert($services);
    }
}
