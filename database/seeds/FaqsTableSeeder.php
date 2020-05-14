<?php

use Illuminate\Database\Seeder;

class FaqsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('faqs')->truncate();

        $faqs = [
            [
                'question' => 'Why can\'t I access to another activities?',
                'category' => 'category1',
                'answer' => 'You can\'t access directly until you complete previous activity of that.',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'question' => 'What is my password and can I change it?',
                'category' => 'category2',
                'answer' => 'To edit your password, please click on menu tab on the right-top corner. Go to \'Change my password\', we\'ll send an email that contains link of changing your password. And then just check your email.',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'question' => 'Will my email address be visible to other users?',
                'category' => 'category3',
                'answer' => 'No, your email address is kept hidden. The only information that is visible to others is your user name and avatar picture.',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],

        ];

        DB::table('faqs')->insert($faqs);
    }
}
