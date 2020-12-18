<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $users = [
          [
            'role_id' => '1',
            'name' => 'Admin',
            'username' => 'SuperAdmin',
            'phone' => '08012345678',
            'email' => 'manager@mclean.com',
            'address' => 'MClean Main branch',
            'access_web' =>  true,
            'access_app' =>  true,
            'password' => 'secret',
            'hidden' => true,
          ],
          [
            'role_id' => '2',
            'name' => 'Ishaq Ibrahim',
            'username' => 'iBagwai',
            'phone' => '07012345678',
            'email' => 'ibagwai9@gmail.com',
            'address' => 'Mabuga QTRS, Bagwai town',
            'access_web' =>  true,
            'access_app' =>  true,
            'password' => 'secret',
            'hidden' => true
          ]

      ];

      foreach ($users as $item){

          $user = User::create([
              'role_id' => $item['role_id'],
              'name' => $item['name'],
              'username' => $item['username'],
              'phone' => $item['phone'],
              'email' => $item['email'],
              'address' => $item['address'],
              'access_web' =>  $item['access_web'],
              'access_app' =>  $item['access_app'],
              'password' => $item['password'],
              'hidden' => $item['hidden']
          ]);

         // $user->assignRole($item['role']);

      }

    }
}
