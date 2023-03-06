<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        $roles = [
            ['name' => 'Super Admin'],
            ['name' => 'Admin'],
            ['name' => 'Supervisor'],
            ['name' => 'General User'],
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
