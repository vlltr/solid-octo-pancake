<?php

namespace Database\Seeders;

use Coderflex\LaravelTicket\Models\Label;
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
            Label::create([
                'name' => $label
            ]);
        }
    }
}
