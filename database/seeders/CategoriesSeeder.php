<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Uncategorized',
            'Delivery',
            'Payment',
            'Sales',
            'Cancellation',
        ];

        foreach ($categories as $category) {
            \App\Models\Category::create([
                'name' => $category
            ]);
        }
    }
}
