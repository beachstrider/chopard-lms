<?php

use Illuminate\Database\Seeder;

class ActivitiesTableSeeder extends Seeder
{
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('activities')->truncate();

        $activities = [

            ['parent_id' => 0, 'chapter' => 1, 'activity' => 0, 'name' => 'Chopard Maison'],
            ['parent_id' => 0, 'chapter' => 1, 'activity' => 1, 'name' => 'Chopard core values'],
            ['parent_id' => 0, 'chapter' => 1, 'activity' => 2, 'name' => 'Chopard assets'],

            ['parent_id' => 0, 'chapter' => 2, 'activity' => 0, 'name' => 'Universe of Chopard parfums'],
            ['parent_id' => 0, 'chapter' => 2, 'activity' => 3, 'name' => 'Mission and values'],
            ['parent_id' => 0, 'chapter' => 2, 'activity' => 4, 'name' => 'Creative philosophy'],

            ['parent_id' => 0, 'chapter' => 3, 'activity' => 0, 'name' => 'Haute Parfumerie: Chopard collections'],
            ['parent_id' => 0, 'chapter' => 3, 'activity' => 5, 'name' => 'Values & codes'],

            ['parent_id' => 7, 'chapter' => 3.1, 'activity' => 0, 'name' => 'The gardens of the tropics'],
            ['parent_id' => 7, 'chapter' => 3.1, 'activity' => 6, 'name' => 'Creative inspiration'],
            ['parent_id' => 7, 'chapter' => 3.1, 'activity' => 7, 'name' => 'Fragrances'], 
            ['parent_id' => 7, 'chapter' => 3.1, 'activity' => 8, 'name' => 'The offer'],

            ['parent_id' => 7, 'chapter' => 3.2, 'activity' => 0, 'name' => 'The gardens of paradise'],
            ['parent_id' => 7, 'chapter' => 3.2, 'activity' => 9, 'name' => 'Creative inspiration'],
            ['parent_id' => 7, 'chapter' => 3.2, 'activity' => 10, 'name' => 'Fragrances'], 
            ['parent_id' => 7, 'chapter' => 3.2, 'activity' => 11, 'name' => 'The offer'],

            ['parent_id' => 7, 'chapter' => 3.3, 'activity' => 0, 'name' => 'The gardens of the kings'],
            ['parent_id' => 7, 'chapter' => 3.3, 'activity' => 12, 'name' => 'Creative inspiration'],
            ['parent_id' => 7, 'chapter' => 3.3, 'activity' => 13, 'name' => 'Fragrances'],
            ['parent_id' => 7, 'chapter' => 3.3, 'activity' => 14, 'name' => 'The offer'],

            ['parent_id' => 7, 'chapter' => 3.4, 'activity' => 0, 'name' => 'Rose de Caroline'],     

            ['parent_id' => 7, 'chapter' => 3.5, 'activity' => 0, 'name' => 'Avant premiere exclusive editions'],     

            ['parent_id' => 0, 'chapter' => 4, 'activity' => 0, 'name' => 'Happy Chopard'],
            ['parent_id' => 0, 'chapter' => 4, 'activity' => 15, 'name' => 'The values'],
            ['parent_id' => 0, 'chapter' => 4, 'activity' => 16, 'name' => 'Olfactive creation'],
            ['parent_id' => 0, 'chapter' => 4, 'activity' => 17, 'name' => 'Fragrances'],
            ['parent_id' => 0, 'chapter' => 4, 'activity' => 18, 'name' => 'The offer'],
            ['parent_id' => 0, 'chapter' => 4, 'activity' => 19, 'name' => 'Advertising campaign'],
            
            ['parent_id' => 0, 'chapter' => 5, 'activity' => 0, 'name' => 'Signature fragrances'],

            ['parent_id' => 0, 'chapter' => 5.1, 'activity' => 0, 'name' => 'Love Chopard'],
            ['parent_id' => 0, 'chapter' => 5.1, 'activity' => 20, 'name' => 'Video Quiz'],
            
            ['parent_id' => 0, 'chapter' => 5.2, 'activity' => 0, 'name' => 'Malaki collection'],
            ['parent_id' => 0, 'chapter' => 5.3, 'activity' => 0, 'name' => '1000 Miglia collection'],

            ['parent_id' => 0, 'chapter' => 6, 'activity' => 0, 'name' => 'Legacy Fragrances'],

        ];



        DB::table('activities')->insert($activities);



        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

    }



}