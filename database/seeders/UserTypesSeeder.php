<?php

namespace Database\Seeders;

use App\Models\UserTypes;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $userTypes = [
            'Lead',
            'System User',
            'Generic Acc',
            'Installer',
            'Sales'
        ];

        for ($i=0; $i < count($userTypes); $i++) { 
            $userType = new UserTypes();
            $userType->name = $userTypes[$i];
            $userType->save();
        }
    }
}
