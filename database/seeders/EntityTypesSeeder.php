<?php

namespace Database\Seeders;

use App\Models\EntityTypes;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EntityTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $entityTypes = [
            'Private Company',
            'Public Company',
            'Individual',
            'Trust',
            'Partnership',
            'Government',
            'NGO',
            'Close Corporation'
        ];

        for ($i=0; $i < count($entityTypes); $i++) { 
            $entity = new EntityTypes();
            $entity->name = $entityTypes[$i];
            $entity->save();
        }
    }
}
