<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $roles = [
            'Lead',
            'Admin',
            'User',
            'Super Admin',
			'Group Admin',
            'Generic Acc',
            'Installer',
            'Sales'
        ];

        $adminPermissions = Permission::findByName('create, read, update, delete');
        $editorPermissions = Permission::findByName('create, read, update');
        $userPermissions = Permission::findByName('read');

        for ($i=0; $i < count($roles); $i++) { 
            $role = Role::create(['name' => $roles[$i]]);
            if ($roles[$i] == 'Super Admin') {
                $role->givePermissionTo($adminPermissions);
            } else if ($roles[$i] == 'Group Admin') {
                $role->givePermissionTo($editorPermissions);
            } else {
                $role->givePermissionTo($userPermissions);
            }
        }
    }
}
