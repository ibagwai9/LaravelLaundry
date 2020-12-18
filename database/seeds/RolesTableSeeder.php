<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
              'display_name' => 'Managing director',
              'hidden' => true,
              'permissions' => [1,2,3,4]
            ],
            [
                'display_name' => 'Accounter',
                'hidden' => false,
                'permissions' => [1,4]
            ],
            [
                'display_name' => 'Attender',
                'hidden' => false,
                'permissions' => [1,3]
            ]
        ];

        foreach ($roles as $item){
            $role = Role::create([
                'display_name'  => $item['display_name'],
                'name'          => str_slug($item['display_name']),
                'hidden'        => $item['hidden']
            ]);

            $permissions = Permission::whereIn('id',$item['permissions'])->get();
            $role->syncPermissions($permissions);
        }
    }
}
