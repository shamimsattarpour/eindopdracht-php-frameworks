<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Type::create([
            'name' => 'Ceiling',
        ]);

        \App\Models\Type::create([
            'name' => 'Wall',
        ]);

        \App\Models\Type::create([
            'name' => 'Modern',
        ]);

        \App\Models\Type::create([
            'name' => 'Outdoor',
        ]);
    }
}