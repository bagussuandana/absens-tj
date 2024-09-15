<?php

namespace Database\Seeders;

use App\Models\Classroom;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Classroom::create([
            'name' => 'X',
            'description' => 'Class for X students',
        ]);
        Classroom::create([
            'name' => 'XI',
            'description' => 'Class for XI students',
        ]);
        Classroom::create([
            'name' => 'XII',
            'description' => 'Class for XII students',
        ]);

    }
}
