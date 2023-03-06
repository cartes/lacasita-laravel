<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
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
        \App\Models\User::factory(1)->create();

        $roles = [
            ['name' => 'Super Admin', 'level' => 0],
            ['name' => 'Admin', 'level' => 1],
            ['name' => 'Supervisor', 'level' => 2],
            ['name' => 'General User', 'level' => 3],
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
