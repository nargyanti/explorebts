<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
                'password' => bcrypt('kalinyala'),
                'phone' => '085868765670',
                'role' => 'Vendor',
                'profile_picture' => 'uploads/profile_pict/kalimati-outdoors.jpg',
            ],
            [
                'name' => 'Arjuna Rental',
                'username' => 'arjunarental',
                'email' => 'arjunarental@gmail.com',
                'password' => bcrypt('bromoarjuna'),
                'phone' => '08983117948',
                'role' => 'Vendor',
                'profile_picture' => 'uploads/profile_pict/arjuna-rental.jpg',
            ],
            [
                'name' => 'Partner Bromo',
                'username' => 'partnerbromo',
                'email' => 'partnerbromo@gmail.com',
                'password' => bcrypt('yourpartner'),
                'phone' => '082132162915',
                'role' => 'Vendor',
                'profile_picture' => 'uploads/profile_pict/partner bromo.jpg',
            ],
            [
                'name' => 'Clover Homestay Probolinggo',
                'username' => 'cloverhomestay',
                'email' => 'cloverhomestay@gmail.com',
                'password' => bcrypt('fourleafclover'),
                'phone' => '081330496663',
                'role' => 'Vendor',
                'profile_picture' => 'uploads/profile_pict/clover-homestay.jpg',
            ],
            [
                'name' => 'Zygy Jeep Rental',
                'username' => 'zygy_jeep',
                'email' => 'zygyrental@gmail.com',
                'password' => bcrypt('vroomvroom'),
                'phone' => '082335250120',
                'role' => 'Vendor',
                'profile_picture' => 'uploads/profile_pict/zygy.jpg',
            ],
            [
                'name' => 'Abdul Rohman',
                'username' => 'abdulll',
                'email' => 'abdulrohman@gmail.com',
                'password' => bcrypt('1941720022'),
                'phone' => '082132575729',
                'role' => 'Tourist',
                'profile_picture' => 'uploads/profile_pict/user.png',
            ],
            [
                'name' => 'Meuti Zari',
                'username' => 'meutizari',
                'email' => 'meutizari@gmail.com',
                'password' => bcrypt('1941720088'),
                'phone' => '082231814712',
                'role' => 'Tourist',
                'profile_picture' => 'uploads/profile_pict/download20200704114634.jpg',
            ],
            [
                'name' => 'Nabilah Argyanti',
                'username' => 'nargyanti',
                'email' => 'nargyanti@gmail.com',
                'password' => bcrypt('1941720083'),
                'phone' => '082257229963',
                'role' => 'Tourist',
                'profile_picture' => 'uploads/profile_pict/user.png',
            ],
            [
                'name' => 'Naufal Nafidiin',
                'username' => 'notpal',
                'email' => 'naufalNafidiin@gmail.com',
                'password' => bcrypt('1941720091'),
                'phone' => '081213405817',
                'role' => 'Tourist',
                'profile_picture' => 'uploads/profile_pict/user.png',
            ],
            [
                'name' => 'Widiareta Safitri',
                'username' => 'widiarsaf',
                'email' => 'widiarsaf@gmail.com',
                'password' => bcrypt('1941720081'),
                'phone' => '085536863159',
                'role' => 'Tourist',
                'profile_picture' => 'uploads/profile_pict/user.png',
            ],
        ];
            
    
        DB::table('users')->insert($profile);
    }
}
