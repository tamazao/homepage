<?php

use Illuminate\Database\Seeder;

class CmsStatisticsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cms_statistics')->delete();
        
        \DB::table('cms_statistics')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Links Added',
                'slug' => 'links-added',
                'created_at' => '2017-12-08 19:38:25',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}