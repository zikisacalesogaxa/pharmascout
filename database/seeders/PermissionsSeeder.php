<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $permissions = [
            'create, read, update, delete',
            'create, read, update',
            'read'
        ];

        for ($i=0; $i < count($permissions); $i++) { 
            Permission::create(['name' => $permissions[$i]]);
        }
    }
}
