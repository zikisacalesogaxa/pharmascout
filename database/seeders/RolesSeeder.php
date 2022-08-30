<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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

        for ($i=0; $i < count($roles); $i++) { 
            Role::create(['name' => $roles[$i]]);
        }
    }
}
