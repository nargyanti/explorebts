<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class profileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $profile = 
        [
            [
                'name' => 'Kalimati Outdoor',
                'username' => 'kalimatioutdoor',
                'email' => 'kalimatioutdoor@gmail.com',
                'password' => Hash::make('kalinyala'),
                'phone' => '085868765670',
                'role' => 'Vendor',
                'profile_picture' => 'uploads/profile_pict/kalimati-outdoors.jpg',
                'balance' => 1000000,
            ],
            [
                'name' => 'Arjuna Rental',
                'username' => 'arjunarental',
                'email' => 'arjunarental@gmail.com',
                'password' => Hash::make('bromoarjuna'),
                'phone' => '08983117948',
                'role' => 'Vendor',
                'profile_picture' => 'uploads/profile_pict/arjuna-rental.jpg',
                'balance' => 1000000,
            ],
            [
                'name' => 'Partner Bromo',
                'username' => 'partnerbromo',
                'email' => 'partnerbromo@gmail.com',
                'password' => Hash::make('yourpartner'),
                'phone' => '082132162915',
                'role' => 'Vendor',
                'profile_picture' => 'uploads/profile_pict/partner bromo.jpg',
                'balance' => 1000000,
            ],
            [
                'name' => 'Clover Homestay Probolinggo',
                'username' => 'cloverhomestay',
                'email' => 'cloverhomestay@gmail.com',
                'password' => Hash::make('fourleafclover'),
                'phone' => '081330496663',
                'role' => 'Vendor',
                'profile_picture' => 'uploads/profile_pict/clover-homestay.jpg',
                'balance' => 1000000,
            ],
            [
                'name' => 'Zygy Jeep Rental',
                'username' => 'zygy_jeep',
                'email' => 'zygyrental@gmail.com',
                'password' => Hash::make('vroomvroom'),
                'phone' => '082335250120',
                'role' => 'Vendor',
                'profile_picture' => 'uploads/profile_pict/zygy.jpg',
                'balance' => 1000000,
            ],
            [
                'name' => 'Abdul Rohman',
                'username' => 'abdulll',
                'email' => 'abdulrohman@gmail.com',
                'password' => Hash::make('1941720022'),
                'phone' => '082132575729',
                'role' => 'Tourist',
                'profile_picture' => 'uploads/profile_pict/user.png',
                'balance' => 1000000,
            ],
            [
                'name' => 'Meuti Zari',
                'username' => 'meutizari',
                'email' => 'meutizari@gmail.com',
                'password' => Hash::make('1941720088'),
                'phone' => '082231814712',
                'role' => 'Tourist',
                'profile_picture' => 'uploads/profile_pict/download20200704114634.jpg',
                'balance' => 1000000,
            ],
            [
                'name' => 'Nabilah Argyanti',
                'username' => 'nargyanti',
                'email' => 'nargyanti@gmail.com',
                'password' => Hash::make('1941720083'),
                'phone' => '082257229963',
                'role' => 'Tourist',
                'profile_picture' => 'uploads/profile_pict/user.png',
                'balance' => 1000000,
            ],
            [
                'name' => 'Naufal Nafidiin',
                'username' => 'notpal',
                'email' => 'naufalNafidiin@gmail.com',
                'password' => Hash::make('1941720091'),
                'phone' => '081213405817',
                'role' => 'Tourist',
                'profile_picture' => 'uploads/profile_pict/user.png',
                'balance' => 1000000,
            ],
            [
                'name' => 'Widiareta Safitri',
                'username' => 'widiarsaf',
                'email' => 'widiarsaf@gmail.com',
                'password' => Hash::make('1941720081'),
                'phone' => '085536863159',
                'role' => 'Tourist',
                'profile_picture' => 'uploads/profile_pict/user.png',
                'balance' => 1000000,
            ],
        ];
            
        DB::table('users')->insert($profile);
    }
}
