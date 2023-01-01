<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            'admin',
            'agent',
            'user',
        ];

        foreach ($roles as $role) {
            Role::create([
                'name' => $role
            ]);
        }

        User::find(1)->assignRole('admin');
        User::find(2)->assignRole('agent');
    }
}
