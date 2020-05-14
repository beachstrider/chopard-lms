<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->truncate();

        $users = [
            [
                'name' => 'Nico',
                'fname' => 'Baraz',
                'email' => 'nico@gmail.com',
                'password' => bcrypt('123456'),
                'verified' => true,
                'phone' => '1654985652',
                'birth' => '1945-03-02',
                'city' => 'London',
                'country' => 'United Kingdom',
                'saleschannel' => 'boutiques chopard',
                'position' => 'SM',
                'others' => '',
                'appname' => 'wechat',
                'appcode' => '7546895421',
                'profile_complete' => true,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],

            [
                'name' => 'Jason',
                'fname' => 'Wang',
                'email' => 'markbanner445@gmail.com',
                'password' => bcrypt('123456'),
                'verified' => true,
                'phone' => '1586425872',
                'birth' => '1996-06-08',
                'city' => 'Paris',
                'country' => 'France',
                'saleschannel' => 'tr',
                'position' => '',
                'others' => 'IT',
                'appname' => 'whatsapp',
                'appcode' => '7546895421',
                'profile_complete' => true,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],

            [
                'name' => 'Vanina',
                'fname' => 'Johndoe',
                'email' => 'vanina@johndoe.es',
                'password' => bcrypt('123456'),
                'verified' => true,
                'phone' => '2451589618',
                'birth' => '1979-09-02',
                'city' => 'Madrid',
                'country' => 'Spain',
                'saleschannel' => 'boutiques chopard',
                'position' => 'Staff',
                'others' => '',
                'appname' => 'wechat',
                'appcode' => '7546895421',
                'profile_complete' => true,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],

            [
                'name' => 'Monica',
                'fname' => 'Johndoe',
                'email' => 'monica@johndoe.es',
                'password' => bcrypt('123456'),
                'verified' => true,
                'phone' => '1356484273',
                'birth' => '1993-11-16',
                'city' => 'York',
                'country' => 'United Kingdom',
                'saleschannel' => 'domestic',
                'position' => '',
                'others' => '',
                'appname' => 'whatsapp',
                'appcode' => '7546895421',
                'profile_complete' => false,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],

            [
                'name' => 'Sonia',
                'fname' => 'Delaurentis',
                'email' => 'sonia.delaurentis@pfch-parfums.ch',
                'password' => bcrypt('123456'),
                'verified' => true,
                'phone' => '1645198575',
                'birth' => '1980-12-05',
                'city' => 'Berlin',
                'country' => 'Germany',
                'saleschannel' => 'tr',
                'position' => 'HR',
                'others' => '',
                'appname' => 'wechat',
                'appcode' => '7546895421',
                'profile_complete' => true,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ]                                                 

        ];

        DB::table('users')->insert($users);
    }

}