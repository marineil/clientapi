<?php

use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Hazel',
                'address' => 'Calape',
                'phone' => '09051112223',
                'capitalization' => 66000,
                'loan' => 120000
            ],
            [
                'name' => 'Judy Ann',
                'address' => 'Clarin',
                'phone' => '09126534440',
                'capitalization' => 65000,
                'loan' => 460000
            ],
            [
                'name' => 'Manel',
                'address' => 'Tubigon',
                'phone' => '09091234123',
                'capitalization' => 34000,
                'loan' => 551000
            ],
            [
                'name' => 'Angel',
                'address' => 'Tubigon',
                'phone' => '090522234123',
                'capitalization' => 44000,
                'loan' => 351000
            ],
            [
                'name' => 'Stefannie',
                'address' => 'Getafe',
                'phone' => '095610922233',
                'capitalization' => 64000,
                'loan' => 511000
            ],
        ];

        foreach($data as $client) {
            \App\Client::create($client);
        }
    }
}
