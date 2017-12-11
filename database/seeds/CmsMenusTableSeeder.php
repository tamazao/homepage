<?php

use Illuminate\Database\Seeder;

class CmsMenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cms_menus')->delete();
        
        \DB::table('cms_menus')->insert(array (
            0 => 
            array (
                'id' => 7,
                'name' => 'Alerts',
                'type' => 'Route',
                'path' => 'AdminAlertsControllerGetIndex',
                'color' => 'normal',
                'icon' => 'fa fa-link',
                'parent_id' => 0,
                'is_active' => 1,
                'is_dashboard' => 0,
                'id_cms_privileges' => 1,
                'sorting' => 1,
                'created_at' => '2017-12-08 19:02:09',
                'updated_at' => '2017-12-08 19:37:12',
            ),
            1 => 
            array (
                'id' => 8,
                'name' => 'Links',
                'type' => 'Route',
                'path' => 'AdminLinksControllerGetIndex',
                'color' => 'normal',
                'icon' => 'fa fa-link',
                'parent_id' => 0,
                'is_active' => 1,
                'is_dashboard' => 0,
                'id_cms_privileges' => 1,
                'sorting' => 2,
                'created_at' => '2017-12-08 19:03:38',
                'updated_at' => '2017-12-08 19:38:11',
            ),
        ));
        
        
    }
}