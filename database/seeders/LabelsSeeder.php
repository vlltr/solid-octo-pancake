<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LabelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $labels = [
            'Bug',
            'Comment',
            'How To',
            'Technical Issue',
        ];

        foreach ($labels as $label) {
            \App\Models\Label::create([
                'name' => $label
            ]);
        }
    }
}
