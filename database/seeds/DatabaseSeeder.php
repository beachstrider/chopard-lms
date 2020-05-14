<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
    	$this->disableForeignKeys();
      $this->call(UsersTableSeeder::class);
      $this->call(ActivitiesTableSeeder::class);
      $this->call(AdminsTableSeeder::class);
      $this->call(FeedbacksTableSeeder::class);
      $this->call(ReportsTableSeeder::class);
      $this->call(CountriesTableSeeder::class);
      $this->call(StatesTableSeeder::class);
      $this->call(CitiesTableSeeder::class);
      $this->call(FaqsTableSeeder::class);
      $this->enableForeignKeys();

    }

    private function disableForeignKeys()
    {
      if (DB::connection()->getDriverName() == 'mysql') {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
      }

    }

    private function enableForeignKeys()
    {
      if (DB::connection()->getDriverName() == 'mysql') {
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
      }
    }

}