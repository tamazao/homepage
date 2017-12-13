<?php

use Illuminate\Database\Seeder;

class CmsUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cms_users')->delete();
        
        \DB::table('cms_users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Super Admin',
                'photo' => NULL,
                'email' => 'admin@crudbooster.com',
                'password' => '$2y$10$0/ovjRGIoHy3Yw/PDUQto.TYmG.N8VXe6hboKI/O.qiHLq4NhEri2',
                'id_cms_privileges' => 1,
                'created_at' => '2017-11-06 21:19:46',
                'updated_at' => NULL,
                'status' => 'Active',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Phil Dolberg',
                'photo' => 'uploads/1/2017-12/generic.jpg',
                'email' => 'Philip.dolberg@regionalcare.com',
                'password' => '$2y$10$EcFfRuK0FKN9cRpoUnmnpOsOvh8s/yt4na8JdTbXyt0F8O.Isjw9S',
                'id_cms_privileges' => 1,
                'created_at' => '2017-11-06 23:08:00',
                'updated_at' => '2017-12-08 18:59:22',
                'status' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'user',
                'photo' => 'uploads/1/2017-11/generic.jpg',
                'email' => 'user@user.com',
                'password' => '$2y$10$QM6ayGQSRAtsgqJzCG7p.OQYyfeC.xMjZkF5Zh1HTK2tVuqD5X2HC',
                'id_cms_privileges' => 1,
                'created_at' => '2017-11-06 23:08:36',
                'updated_at' => NULL,
                'status' => NULL,
            ),
        ));
        
        
    }
}