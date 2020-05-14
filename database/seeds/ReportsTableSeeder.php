<?php

use Illuminate\Database\Seeder;

class ReportsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('reports')->truncate();

        $reports = [
            [
                'user_id' => 4,
                'name' => 'Monica Johndoe',
                'description' => 'Hi! I am Monica from UK. I\'ve got a problem with my account.',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'user_id' => 3,
                'name' => 'Vanina Johndoe',
                'description' => 'How are you? I can not change my account infos now. Please resolve it.',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'user_id' => 2,
                'name' => 'Jason Wang',
                'description' => 'Good morning? How can I upgrade my membership in Chorpardparfumstraining?',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],

        ];

        DB::table('reports')->insert($reports);
    }
}
