<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
          ['display_name' => 'Verified user'],                                //
          ['display_name' => 'Manage Users'],                                 //
          ['display_name' => 'Attending clients'],                            //
          ['display_name' => 'Manage bills'],                                 //
        ];

        foreach ($permissions as $item){
            Permission::create([
                'display_name'  => $item['display_name'],
                'name'          => str_slug($item['display_name'])
            ]);
        }
    }
}
