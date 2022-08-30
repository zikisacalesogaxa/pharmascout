<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Team::create([
            'name' => 'Scout Technologies',
            'user_id' => 1,
            'personal_team' => true
        ]);

        Team::create([
            'name' => 'Scout Technologies 2',
            'user_id' => 2,
            'personal_team' => true
        ]);
    
        $this->call(PermissionsSeeder::class);
        $this->call(RolesSeeder::class);
        $this->call(EntityTypesSeeder::class);

        User::create([
            'name' => 'Admin',
            'surname' => 'Admin',
            'username' => 'hello@scout.tech',
            'email' => 'hello@scout.tech',
            'current_team_id' => 1,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ])->assignRole(['Super Admin']);

        User::create([
            'name' => 'Test',
            'surname' => 'Test',
            'username' => 'test@scout.tech',
            'email' => 'test@scout.tech',
            'current_team_id' => 2,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ])->assignRole(['User']);
    }
}
