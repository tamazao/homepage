<?php

use Illuminate\Database\Seeder;

class CmsModulsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cms_moduls')->delete();
        
        \DB::table('cms_moduls')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Notifications',
                'icon' => 'fa fa-cog',
                'path' => 'notifications',
                'table_name' => 'cms_notifications',
                'controller' => 'NotificationsController',
                'is_protected' => 1,
                'is_active' => 1,
                'created_at' => '2017-11-06 21:19:46',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Privileges',
                'icon' => 'fa fa-cog',
                'path' => 'privileges',
                'table_name' => 'cms_privileges',
                'controller' => 'PrivilegesController',
                'is_protected' => 1,
                'is_active' => 1,
                'created_at' => '2017-11-06 21:19:46',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Privileges Roles',
                'icon' => 'fa fa-cog',
                'path' => 'privileges_roles',
                'table_name' => 'cms_privileges_roles',
                'controller' => 'PrivilegesRolesController',
                'is_protected' => 1,
                'is_active' => 1,
                'created_at' => '2017-11-06 21:19:46',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Users Management',
                'icon' => 'fa fa-users',
                'path' => 'users',
                'table_name' => 'cms_users',
                'controller' => 'AdminCmsUsersController',
                'is_protected' => 0,
                'is_active' => 1,
                'created_at' => '2017-11-06 21:19:46',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Settings',
                'icon' => 'fa fa-cog',
                'path' => 'settings',
                'table_name' => 'cms_settings',
                'controller' => 'SettingsController',
                'is_protected' => 1,
                'is_active' => 1,
                'created_at' => '2017-11-06 21:19:46',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Module Generator',
                'icon' => 'fa fa-database',
                'path' => 'module_generator',
                'table_name' => 'cms_moduls',
                'controller' => 'ModulsController',
                'is_protected' => 1,
                'is_active' => 1,
                'created_at' => '2017-11-06 21:19:46',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Menu Management',
                'icon' => 'fa fa-bars',
                'path' => 'menu_management',
                'table_name' => 'cms_menus',
                'controller' => 'MenusController',
                'is_protected' => 1,
                'is_active' => 1,
                'created_at' => '2017-11-06 21:19:46',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Email Templates',
                'icon' => 'fa fa-envelope-o',
                'path' => 'email_templates',
                'table_name' => 'cms_email_templates',
                'controller' => 'EmailTemplatesController',
                'is_protected' => 1,
                'is_active' => 1,
                'created_at' => '2017-11-06 21:19:46',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Statistic Builder',
                'icon' => 'fa fa-dashboard',
                'path' => 'statistic_builder',
                'table_name' => 'cms_statistics',
                'controller' => 'StatisticBuilderController',
                'is_protected' => 1,
                'is_active' => 1,
                'created_at' => '2017-11-06 21:19:46',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'API Generator',
                'icon' => 'fa fa-cloud-download',
                'path' => 'api_generator',
                'table_name' => '',
                'controller' => 'ApiCustomController',
                'is_protected' => 1,
                'is_active' => 1,
                'created_at' => '2017-11-06 21:19:46',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Log User Access',
                'icon' => 'fa fa-flag-o',
                'path' => 'logs',
                'table_name' => 'cms_logs',
                'controller' => 'LogsController',
                'is_protected' => 1,
                'is_active' => 1,
                'created_at' => '2017-11-06 21:19:46',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'load',
                'icon' => 'fa fa-upload',
                'path' => 'loads',
                'table_name' => 'loads',
                'controller' => 'AdminLoads1Controller',
                'is_protected' => 0,
                'is_active' => 0,
                'created_at' => '2017-11-06 21:21:32',
                'updated_at' => NULL,
                'deleted_at' => '2017-12-08 19:01:08',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'details',
                'icon' => 'fa fa-list',
                'path' => 'details',
                'table_name' => 'details',
                'controller' => 'AdminDetails1Controller',
                'is_protected' => 0,
                'is_active' => 0,
                'created_at' => '2017-11-06 21:22:26',
                'updated_at' => NULL,
                'deleted_at' => '2017-12-08 19:01:05',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Load Info',
                'icon' => 'fa fa-info',
                'path' => 'loads14',
                'table_name' => 'loads',
                'controller' => 'AdminLoads14Controller',
                'is_protected' => 0,
                'is_active' => 0,
                'created_at' => '2017-11-06 23:09:56',
                'updated_at' => NULL,
                'deleted_at' => '2017-11-06 23:10:38',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Default Codes',
                'icon' => 'fa fa-check',
                'path' => 'defaultCodes',
                'table_name' => 'defaultCodes',
                'controller' => 'AdminDefaultCodesController',
                'is_protected' => 0,
                'is_active' => 0,
                'created_at' => '2017-11-06 23:45:55',
                'updated_at' => NULL,
                'deleted_at' => '2017-12-08 19:00:56',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Default Master',
                'icon' => 'fa fa-check',
                'path' => 'defaultMaster',
                'table_name' => 'defaultMaster',
                'controller' => 'AdminDefaultMasterController',
                'is_protected' => 0,
                'is_active' => 0,
                'created_at' => '2017-11-06 23:47:36',
                'updated_at' => NULL,
                'deleted_at' => '2017-12-08 19:01:02',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Default Details',
                'icon' => 'fa fa-check',
                'path' => 'defaultDetails',
                'table_name' => 'defaultDetails',
                'controller' => 'AdminDefaultDetailsController',
                'is_protected' => 0,
                'is_active' => 0,
                'created_at' => '2017-11-06 23:48:49',
                'updated_at' => NULL,
                'deleted_at' => '2017-12-08 19:00:59',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Alerts',
                'icon' => 'fa fa-warning',
                'path' => 'alerts',
                'table_name' => 'alerts',
                'controller' => 'AdminAlertsController',
                'is_protected' => 0,
                'is_active' => 0,
                'created_at' => '2017-12-08 19:02:09',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Links',
                'icon' => 'fa fa-users',
                'path' => 'links',
                'table_name' => 'links',
                'controller' => 'AdminLinksController',
                'is_protected' => 0,
                'is_active' => 0,
                'created_at' => '2017-12-08 19:03:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}