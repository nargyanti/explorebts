<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prod = 
        [
            [
                'name' => 'Eiger Replecmen Double Layer',
                'vendor_id' => '2',
                'category' => 'Camping Tools',
                'picture' => 'uploads/product_pict/6aec7c5b-dd39-4b15-ba8a-00b1ee0e7cbf.jpg',
                'unit_price' => '15000',
                'stock' => '1',
                'description' => 'Double layer tent that can fit up to 3 persons.',
            ],
            [
                'name' => 'Eiger Mummy 250 - B0451 Sleeping Bad',
                'vendor_id' => '2',
                'category' => 'Camping Tools',
                'picture' => 'uploads/product_pict/103148060_df946ffb-f70d-4f6f-8845-dc7461ab6527_590_590.jpg',
                'unit_price' => '8000',
                'stock' => '4',
                'description' => 'This sleeping bag has a mummy model. Suitable for use in places with a temperature of 5 - 15 ° C and suitable for people with a maximum height of 180 cm.',
            ],
            [
                'name' => 'Consina Jomson New Mountain Boots',
                'vendor_id' => '3',
                'category' => 'Camping Tools',
                'picture' => 'uploads/product_pict/unnamed.jpg',
                'unit_price' => '25000',
                'stock' => '2',
                'description' => 'Consina Jomson New mountain boots sizes 39 - 43 are suitable for climbing mountains. These mountain boots are water resistant and provide excellent control over the footing, which keeps your feet dry and comfortable.',
            ],
            [
                'name' => 'Jeep Bromo Toyota FJ40 For 7 People',
                'vendor_id' => '6',
                'category' => 'Jeep',
                'picture' => 'uploads/product_pict/4155998451.jpg',
                'unit_price' => '800000',
                'stock' => '3',
                'description' => 'Rent a jeep to Mount Bromo area with a capacity of 7 people. Include driver, petrol, and parking. Pick up point in Tosari, Pasuruan.',
            ],
            [
                'name' => 'Jeep Bromo Toyota BJ40 For 5 People',
                'vendor_id' => '6',
                'category' => 'Jeep',
                'picture' => 'uploads/product_pict/213913378.jpg',
                'unit_price' => '500000',
                'stock' => '4',
                'description' => 'Rent a jeep to Mount Bromo area with a capacity of 5 people. Include driver, petrol, and parking. Pick up point in Tosari, Pasuruan.',
            ],
            [
                'name' => 'Jeep Bromo Toyota FJ40 Exclude Driver',
                'vendor_id' => '3',
                'category' => 'Jeep',
                'picture' => 'uploads/product_pict/sewa-jeep-bromo-1.jpeg',
                'unit_price' => '300000',
                'stock' => '6',
                'description' => 'Rent a jeep to Mount Bromo area with a capacity of 7-9 people. Jeep rental only, not including driver and gasoline. The point of taking a jeep at The Forest Tumpang.',
            ],
            [
                'name' => 'Private Trip Bromo For 2 People',
                'vendor_id' => '4',
                'category' => 'Trip',
                'picture' => 'uploads/product_pict/l22234.jfif',
                'unit_price' => '420000',
                'stock' => '2',
                'description' => 'Private trip to Mount Bromo and its surroundings for one day. The customers determine the destination from the start to the end by theirself. Include pickup at Ngadisari, entrance tickets, masks, documentation, and meals.',
            ],
            [
                'name' => 'Open Trip Bromo For 12 People',
                'vendor_id' => '4',
                'category' => 'Trip',
                'picture' => 'uploads/product_pict/l26330.jfif',
                'unit_price' => '250000',
                'stock' => '14',
                'description' => 'Destinations: Penanjakan, Ledok Widodaren, Gunung Batok, Kawah Bromo, Bukit Teletubbies, and souvenir shops. Pick up point at The Forest Tumpang. Free to invite any person.',
            ],
            [
                'name' => 'Open Trip Semeru For 12-20 People',
                'vendor_id' => '6',
                'category' => 'Trip',
                'picture' => 'uploads/product_pict/Ranu-Kumbolo.jpg',
                'unit_price' => '650000',
                'stock' => '3',
                'description' => 'Open trip to Mount Semeru with 12-20 people. Include transportation, guide, 9x meals, homestay, documentation, first aid kit, tents, and TNBTS insurance.',
            ],
            [
                'name' => 'Clover Homestay Standard Room',
                'vendor_id' => '5',
                'category' => 'Inn',
                'picture' => 'uploads/product_pict/152143042.jpg',
                'unit_price' => '100000',
                'stock' => '6',
                'description' => 'Standard room measuring 4m x 4m with single bed. There is an outside bathroom as well as a communal kitchen for cooking.',
            ],
            [
                'name' => 'Clover Homestay Superior Room',
                'vendor_id' => '5',
                'category' => 'Inn',
                'picture' => 'uploads/product_pict/bb703007affc1e68ade676d53fcaef1b.jpg',
                'unit_price' => '180000',
                'stock' => '6',
                'description' => 'Superior room measuring 5m x 5m with twin beds. There is an outside bathroom as well as a communal kitchen for cooking.',
            ],
            [
                'name' => 'Clover Homestay Deluxe Room',
                'vendor_id' => '5',
                'category' => 'Inn',
                'picture' => 'uploads/product_pict/unnamed (1).jpg',
                'unit_price' => '250000',
                'stock' => '2',
                'description' => 'Deluxe room measuring 5m x 5m with a king bed. There is an en-suite bathroom and a communal kitchen for cooking.',
            ],
        ];

        DB::table('products')->insert($prod);
    }
}

