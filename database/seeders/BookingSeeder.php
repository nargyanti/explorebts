<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $book =
        [
            [
                'tourist_id' => '9',
                'product_id' => '1',
                'quantity' => '2',
                'start_date' => '2020-03-21',
                'total_days' => '2',
                'status' => 'BOOKED',
                'total_price' => '60000',
            ],
            [
                'tourist_id' => '9',
                'product_id' => '6',
                'quantity' => '1',
                'start_date' => '2020-03-21',
                'total_days' => '2',
                'status' => 'BOOKED',
                'total_price' => '600000',
            ],
            [
                'tourist_id' => '7',
                'product_id' => '8',
                'quantity' => '1',
                'start_date' => '2020-06-28',
                'total_days' => '1',
                'status' => 'BOOKED',
                'total_price' => '250000',
            ],
            [
                'tourist_id' => '7',
                'product_id' => '12',
                'quantity' => '2',
                'start_date' => '2020-06-28',
                'total_days' => '1',
                'status' => 'BOOKED',
                'total_price' => '500000',
            ],
            [
                'tourist_id' => '11',
                'product_id' => '2',
                'quantity' => '1',
                'start_date' => '2020-12-29',
                'total_days' => '3',
                'status' => 'BOOKED',
                'total_price' => '24000',
            ],
            [
                'tourist_id' => '11',
                'product_id' => '3',
                'quantity' => '1',
                'start_date' => '2020-12-29',
                'total_days' => '3',
                'status' => 'BOOKED',
                'total_price' => '75000',
            ],
            [
                'tourist_id' => '8',
                'product_id' => '7',
                'quantity' => '1',
                'start_date' => '2020-12-21',
                'total_days' => '2',
                'status' => 'BOOKED',
                'total_price' => '840000',
            ],
            [
                'tourist_id' => '8',
                'product_id' => '11',
                'quantity' => '2',
                'start_date' => '2020-12-21',
                'total_days' => '2',
                'status' => 'BOOKED',
                'total_price' => '720000',
            ],
            [
                'tourist_id' => '10',
                'product_id' => '5',
                'quantity' => '1',
                'start_date' => '2020-08-02',
                'total_days' => '2',
                'status' => 'BOOKED',
                'total_price' => '1000000',
            ],
            [
                'tourist_id' => '10',
                'product_id' => '1',
                'quantity' => '1',
                'start_date' => '2020-08-02',
                'total_days' => '3',
                'status' => 'BOOKED',
                'total_price' => '45000',
            ],
            [
                'tourist_id' => '8',
                'product_id' => '2',
                'quantity' => '1',
                'start_date' => '2020-06-29',
                'total_days' => '1',
                'status' => 'CANCELED',
                'total_price' => '8000',
            ],
        ];

        DB::table('bookings')->insert($book);
    } 
}
