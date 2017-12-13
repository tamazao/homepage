<?php

use Illuminate\Database\Seeder;

class CmsLogsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cms_logs')->delete();
        
        \DB::table('cms_logs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'ipaddress' => '192.168.10.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36',
                'url' => 'http://liabilityloader.dev/admin/logout',
                'description' => ' logout',
                'details' => '',
                'id_cms_users' => 2,
                'created_at' => '2017-11-06 21:20:03',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'ipaddress' => '192.168.10.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36',
                'url' => 'http://liabilityloader.dev/admin/login',
                'description' => 'admin@crudbooster.com login with IP Address 192.168.10.1',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2017-11-06 21:20:41',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'ipaddress' => '192.168.10.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36',
                'url' => 'http://liabilityloader.dev/admin/loads/add-save',
                'description' => 'Add New Data 1 at load',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2017-11-06 21:24:16',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'ipaddress' => '192.168.10.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36',
                'url' => 'http://liabilityloader.dev/admin/details/add-save',
                'description' => 'Add New Data 1 at details',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2017-11-06 22:36:43',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'ipaddress' => '192.168.10.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36',
                'url' => 'http://liabilityloader.dev/admin/loads/add-save',
                'description' => 'Add New Data 2 at load',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2017-11-06 22:39:53',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'ipaddress' => '192.168.10.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36',
                'url' => 'http://liabilityloader.dev/admin/loads/edit-save/2',
                'description' => 'Update data  at load',
                'details' => '<table class="table table-striped"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>LoadName</td><td>History Accumulator Load</td><td>21CENEQ - History Accumulator Load</td></tr></tbody></table>',
                'id_cms_users' => 1,
                'created_at' => '2017-11-06 22:41:51',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'ipaddress' => '192.168.10.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36',
                'url' => 'http://liabilityloader.dev/admin/menu_management/edit-save/1',
                'description' => 'Update data load at Menu Management',
                'details' => '<table class="table table-striped"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>color</td><td></td><td>normal</td></tr><tr><td>icon</td><td>fa fa-upload</td><td>fa fa-list</td></tr><tr><td>parent_id</td><td>0</td><td></td></tr><tr><td>is_dashboard</td><td>0</td><td>1</td></tr></tbody></table>',
                'id_cms_users' => 1,
                'created_at' => '2017-11-06 22:44:55',
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'ipaddress' => '192.168.10.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36',
                'url' => 'http://liabilityloader.dev/admin/menu_management/edit-save/2',
                'description' => 'Update data details at Menu Management',
                'details' => '<table class="table table-striped"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>color</td><td></td><td>normal</td></tr><tr><td>parent_id</td><td>0</td><td></td></tr><tr><td>is_dashboard</td><td>0</td><td>1</td></tr><tr><td>sorting</td><td>2</td><td></td></tr></tbody></table>',
                'id_cms_users' => 1,
                'created_at' => '2017-11-06 22:45:04',
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'ipaddress' => '192.168.10.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36',
                'url' => 'http://liabilityloader.dev/admin/menu_management/edit-save/2',
                'description' => 'Update data details at Menu Management',
                'details' => '<table class="table table-striped"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>sorting</td><td>2</td><td></td></tr></tbody></table>',
                'id_cms_users' => 1,
                'created_at' => '2017-11-06 23:02:37',
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'ipaddress' => '192.168.10.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36',
                'url' => 'http://liabilityloader.dev/admin/details/add-save',
                'description' => 'Add New Data 2 at details',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2017-11-06 23:06:49',
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'ipaddress' => '192.168.10.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36',
                'url' => 'http://liabilityloader.dev/admin/logout',
                'description' => 'admin@crudbooster.com logout',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2017-11-06 23:07:18',
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'ipaddress' => '192.168.10.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36',
                'url' => 'http://liabilityloader.dev/admin/login',
                'description' => 'admin@crudbooster.com login with IP Address 192.168.10.1',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2017-11-06 23:07:32',
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'ipaddress' => '192.168.10.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36',
                'url' => 'http://liabilityloader.dev/admin/users/add-save',
                'description' => 'Add New Data Phil Dolberg at Users Management',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2017-11-06 23:08:00',
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'ipaddress' => '192.168.10.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36',
                'url' => 'http://liabilityloader.dev/admin/users/add-save',
                'description' => 'Add New Data user at Users Management',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2017-11-06 23:08:36',
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'ipaddress' => '192.168.10.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36',
                'url' => 'http://liabilityloader.dev/admin/module_generator/delete/14',
                'description' => 'Delete data Load Info at Module Generator',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2017-11-06 23:10:38',
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'ipaddress' => '192.168.10.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36',
                'url' => 'http://liabilityloader.dev/admin/defaultCodes/add-save',
                'description' => 'Add New Data 1 at Default Codes',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2017-11-06 23:47:03',
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'ipaddress' => '192.168.10.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36',
                'url' => 'http://liabilityloader.dev/admin/defaultMaster/add-save',
                'description' => 'Add New Data 1 at Default Master',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2017-11-06 23:48:24',
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'ipaddress' => '192.168.10.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36',
                'url' => 'http://liabilityloader.dev/admin/defaultDetails/add-save',
                'description' => 'Add New Data 1 at Default Details',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2017-11-06 23:52:03',
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'ipaddress' => '192.168.10.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36',
                'url' => 'http://liabilityloader.dev/admin/menu_management/edit-save/4',
                'description' => 'Update data Default Codes at Menu Management',
                'details' => '<table class="table table-striped"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>color</td><td></td><td>light-blue</td></tr><tr><td>icon</td><td>fa fa-check</td><td></td></tr><tr><td>sorting</td><td>3</td><td></td></tr></tbody></table>',
                'id_cms_users' => 1,
                'created_at' => '2017-11-06 23:52:38',
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'ipaddress' => '192.168.10.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36',
                'url' => 'http://liabilityloader.dev/admin/menu_management/edit-save/4',
                'description' => 'Update data Default Codes at Menu Management',
                'details' => '<table class="table table-striped"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>color</td><td>light-blue</td><td>green</td></tr><tr><td>sorting</td><td>3</td><td></td></tr></tbody></table>',
                'id_cms_users' => 1,
                'created_at' => '2017-11-06 23:52:53',
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'ipaddress' => '192.168.10.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36',
                'url' => 'http://liabilityloader.dev/admin/menu_management/edit-save/5',
                'description' => 'Update data Default Master at Menu Management',
                'details' => '<table class="table table-striped"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>color</td><td></td><td>green</td></tr><tr><td>sorting</td><td>4</td><td></td></tr></tbody></table>',
                'id_cms_users' => 1,
                'created_at' => '2017-11-06 23:53:07',
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'ipaddress' => '192.168.10.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36',
                'url' => 'http://liabilityloader.dev/admin/menu_management/edit-save/6',
                'description' => 'Update data Default Details at Menu Management',
                'details' => '<table class="table table-striped"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>color</td><td></td><td>green</td></tr><tr><td>sorting</td><td>5</td><td></td></tr></tbody></table>',
                'id_cms_users' => 1,
                'created_at' => '2017-11-06 23:53:16',
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'ipaddress' => '192.168.10.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36',
                'url' => 'http://liabilityloader.dev/admin/login',
                'description' => 'admin@crudbooster.com login with IP Address 192.168.10.1',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2017-11-27 15:59:55',
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'ipaddress' => '192.168.10.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36',
                'url' => 'http://homepage.dev/admin/login',
                'description' => 'admin@crudbooster.com login with IP Address 192.168.10.1',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2017-12-08 18:56:06',
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'ipaddress' => '192.168.10.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36',
                'url' => 'http://homepage.dev/admin/users/delete-image',
                'description' => 'Delete the image of Phil Dolberg at Users Management',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2017-12-08 18:59:16',
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'ipaddress' => '192.168.10.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36',
                'url' => 'http://homepage.dev/admin/users/edit-save/2',
                'description' => 'Update data Phil Dolberg at Users Management',
                'details' => '<table class="table table-striped"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>photo</td><td></td><td>uploads/1/2017-12/generic.jpg</td></tr><tr><td>password</td><td>$2y$10$EcFfRuK0FKN9cRpoUnmnpOsOvh8s/yt4na8JdTbXyt0F8O.Isjw9S</td><td></td></tr><tr><td>status</td><td></td><td></td></tr></tbody></table>',
                'id_cms_users' => 1,
                'created_at' => '2017-12-08 18:59:22',
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'ipaddress' => '192.168.10.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36',
                'url' => 'http://homepage.dev/admin/module_generator/delete/15',
                'description' => 'Delete data Default Codes at Module Generator',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2017-12-08 19:00:56',
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'ipaddress' => '192.168.10.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36',
                'url' => 'http://homepage.dev/admin/module_generator/delete/17',
                'description' => 'Delete data Default Details at Module Generator',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2017-12-08 19:00:59',
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'ipaddress' => '192.168.10.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36',
                'url' => 'http://homepage.dev/admin/module_generator/delete/16',
                'description' => 'Delete data Default Master at Module Generator',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2017-12-08 19:01:02',
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'ipaddress' => '192.168.10.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36',
                'url' => 'http://homepage.dev/admin/module_generator/delete/13',
                'description' => 'Delete data details at Module Generator',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2017-12-08 19:01:05',
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'ipaddress' => '192.168.10.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36',
                'url' => 'http://homepage.dev/admin/module_generator/delete/12',
                'description' => 'Delete data load at Module Generator',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2017-12-08 19:01:08',
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'ipaddress' => '192.168.10.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36',
                'url' => 'http://homepage.dev/admin/alerts/add-save',
                'description' => 'Add New Data 3 at Alerts',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2017-12-08 19:08:30',
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'ipaddress' => '192.168.10.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36',
                'url' => 'http://homepage.dev/admin/alerts/add-save',
                'description' => 'Add New Data 4 at Alerts',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2017-12-08 19:13:05',
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'ipaddress' => '192.168.10.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36',
                'url' => 'http://homepage.dev/admin/alerts/edit-save/4',
                'description' => 'Update data  at Alerts',
                'details' => '<table class="table table-striped"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>priority</td><td>info</td><td>warning</td></tr></tbody></table>',
                'id_cms_users' => 1,
                'created_at' => '2017-12-08 19:13:20',
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'ipaddress' => '192.168.10.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36',
                'url' => 'http://homepage.dev/admin/alerts/edit-save/4',
                'description' => 'Update data  at Alerts',
                'details' => '<table class="table table-striped"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>priority</td><td>warning</td><td>danger</td></tr></tbody></table>',
                'id_cms_users' => 1,
                'created_at' => '2017-12-08 19:13:30',
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'ipaddress' => '192.168.10.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36',
                'url' => 'http://homepage.dev/admin/alerts/edit-save/4',
                'description' => 'Update data  at Alerts',
                'details' => '<table class="table table-striped"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>priority</td><td>danger</td><td>success</td></tr></tbody></table>',
                'id_cms_users' => 1,
                'created_at' => '2017-12-08 19:13:39',
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'ipaddress' => '192.168.10.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36',
                'url' => 'http://homepage.dev/admin/alerts/edit-save/4',
                'description' => 'Update data  at Alerts',
                'details' => '<table class="table table-striped"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>priority</td><td>success</td><td>primary</td></tr></tbody></table>',
                'id_cms_users' => 1,
                'created_at' => '2017-12-08 19:13:47',
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'ipaddress' => '192.168.10.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36',
                'url' => 'http://homepage.dev/admin/links/add-save',
                'description' => 'Add New Data Reddit SQL at Liniks',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2017-12-08 19:31:50',
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'ipaddress' => '192.168.10.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36',
                'url' => 'http://homepage.dev/admin/menu_management/edit-save/8',
                'description' => 'Update data Links at Menu Management',
                'details' => '<table class="table table-striped"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>name</td><td>Liniks</td><td>Links</td></tr><tr><td>color</td><td></td><td>normal</td></tr><tr><td>sorting</td><td>2</td><td></td></tr></tbody></table>',
                'id_cms_users' => 1,
                'created_at' => '2017-12-08 19:34:58',
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'ipaddress' => '192.168.10.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36',
                'url' => 'http://homepage.dev/admin/menu_management/edit-save/7',
                'description' => 'Update data Alerts at Menu Management',
                'details' => '<table class="table table-striped"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>color</td><td></td><td>normal</td></tr><tr><td>icon</td><td>fa fa-warning</td><td>fa fa-link</td></tr><tr><td>parent_id</td><td>0</td><td></td></tr><tr><td>is_dashboard</td><td>0</td><td>1</td></tr></tbody></table>',
                'id_cms_users' => 1,
                'created_at' => '2017-12-08 19:37:12',
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'ipaddress' => '192.168.10.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36',
                'url' => 'http://homepage.dev/admin/menu_management/edit-save/8',
                'description' => 'Update data Links at Menu Management',
                'details' => '<table class="table table-striped"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>sorting</td><td>2</td><td></td></tr></tbody></table>',
                'id_cms_users' => 1,
                'created_at' => '2017-12-08 19:37:21',
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'ipaddress' => '192.168.10.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36',
                'url' => 'http://homepage.dev/admin/menu_management/edit-save/8',
                'description' => 'Update data Links at Menu Management',
                'details' => '<table class="table table-striped"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>parent_id</td><td>0</td><td></td></tr><tr><td>is_dashboard</td><td>0</td><td>1</td></tr><tr><td>sorting</td><td>2</td><td></td></tr></tbody></table>',
                'id_cms_users' => 1,
                'created_at' => '2017-12-08 19:37:52',
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'ipaddress' => '192.168.10.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36',
                'url' => 'http://homepage.dev/admin/menu_management/edit-save/8',
                'description' => 'Update data Links at Menu Management',
                'details' => '<table class="table table-striped"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>sorting</td><td>2</td><td></td></tr></tbody></table>',
                'id_cms_users' => 1,
                'created_at' => '2017-12-08 19:38:11',
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'ipaddress' => '192.168.10.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36',
                'url' => 'http://homepage.dev/admin/statistic_builder/add-save',
                'description' => 'Add New Data Links Added at Statistic Builder',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2017-12-08 19:38:25',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}