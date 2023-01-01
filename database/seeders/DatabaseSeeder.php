<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        \App\Models\User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Agent User',
            'email' => 'agent@example.com',
        ]);

        $this->call([
            CategoriesSeeder::class,
            LabelsSeeder::class,
            RoleSeeder::class
        ]);

        \App\Models\User::factory(10)
            ->create()
            ->each(fn ($user) => $user->assignRole('user'));
    }
}
