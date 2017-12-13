<?php

use Illuminate\Database\Seeder;

class CmsStatisticComponentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cms_statistic_components')->delete();
        
        \DB::table('cms_statistic_components')->insert(array (
            0 => 
            array (
                'id' => 1,
                'id_cms_statistics' => 1,
                'componentID' => '7f0e1d4c82ccce192ab06dcd06c18fb8',
                'component_name' => 'smallbox',
                'area_name' => 'area5',
                'sorting' => 0,
                'name' => NULL,
            'config' => '{"name":"Links Added in the last 30 days","icon":"ion-link","color":"bg-green","link":"http:\\/\\/homepage.dev","sql":"SELECT Count(*) from links where created_at >= date_add(Now(), INTERVAL -30 DAY);"}',
                'created_at' => '2017-12-08 19:38:39',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}