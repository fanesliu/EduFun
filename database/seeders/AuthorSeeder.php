<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $name = [
           'Fanes Liu, S.Kom.',
           'Ming Ming, Dr. M.Kom.',
        //    'O om Stephen'
        ];
        $specialist = [
            'Data Science Specialist',
            'Network Security Specialist',
            // 'Cloud Computing Specialist'
        ];
        for ($i = 0; $i < count($name); $i++) {
            Author::create([
                'name' => $name[$i],
                'specialist' => $specialist[$i]
            ]);
        }
    }
}
