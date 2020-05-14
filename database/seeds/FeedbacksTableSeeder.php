<?php

use Illuminate\Database\Seeder;

class FeedbacksTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('feedbacks')->truncate();

        $feedbacks = [
            [
                'name' => 'Monica Johndoe',
                'description' => 'Great quiz!!! I\'ve never seen like this.',
                'knowledge' => 5,
                'answering' => 5,
                'enjoying' => 5,
                'quality' => 5,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'name' => 'Nico Baraz',
                'description' => 'Nothing special. So so.',
                'knowledge' => 2,
                'answering' => 3,
                'enjoying' => 1,
                'quality' => 4,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'name' => 'Vanina Johndoe',
                'description' => 'It was beautiful. I hope the new chapters will be coming.',
                'knowledge' => 5,
                'answering' => 5,
                'enjoying' => 4,
                'quality' => 5,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'name' => 'Jason Wang',
                'description' => 'Fantastic. I really love it.',
                'knowledge' => 5,
                'answering' => 5,
                'enjoying' => 5,
                'quality' => 5,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'name' => 'Sonia Delaurentis',
                'description' => 'Not interesting for me. I don\'t like this aspect.',
                'knowledge' => 4,
                'answering' => 2,
                'enjoying' => 3,
                'quality' => 3,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],

        ];

        DB::table('feedbacks')->insert($feedbacks);
    }
}
