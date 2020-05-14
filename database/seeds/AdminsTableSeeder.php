<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('admins')->truncate();

        DB::table('admins')->insert([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('123456'),
            'is_super' => true,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('admins')->insert([
            'name' => 'Jason Wang',
            'email' => 'jason@jason.com',
            'password' => bcrypt('123456'),
            'is_super' => false,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('admins')->insert([
            'name' => 'Jane Eyer',
            'email' => 'jane@jane.com',
            'password' => bcrypt('123456'),
            'is_super' => false,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('admins')->insert([
            'name' => 'Cebin cruel',
            'email' => 'cebin@cebin.com',
            'password' => bcrypt('123456'),
            'is_super' => false,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
