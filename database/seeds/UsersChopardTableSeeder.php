<?php

use Illuminate\Database\Seeder;

class UsersChopardTableSeeder extends Seeder
{
    public function run()
    {
        $users = [];
        $csv_path = storage_path('app/users/chopard-users.csv');
        $file_handle = fopen($csv_path, 'r');

        while (! feof($file_handle)) {
            $items[] = fgetcsv($file_handle, 1024, ';');
        }

        fclose($file_handle);

        foreach ($items as $index => $item) {
            if ($item) {
                $users[$index]['name'] = $item[0];
                $users[$index]['email'] = $item[1];
                $users[$index]['password'] = bcrypt('123456');
                $users[$index]['created_at'] = date("Y-m-d H:i:s");
                $users[$index]['updated_at'] = date("Y-m-d H:i:s");
            }
        }

        DB::table('users')->insert($users);
    }

}

