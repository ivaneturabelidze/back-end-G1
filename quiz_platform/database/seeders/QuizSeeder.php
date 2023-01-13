<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('quizzes')->insert([
            [
                'title' => 'quiz_1',
                'description' => 'Desc 1',
                'picture' => 'https://fujifilm-x.com/wp-content/uploads/2021/01/gfx100s_sample_01_thum.jpg',
                'user_id' => 1,
                'created_at' => DB::raw('current_timestamp'),
                'updated_at' => DB::raw('current_timestamp')
            ],
            [
                'title' => 'quiz_2',
                'description' => 'Desc 2',
                'picture' => 'https://fujifilm-x.com/wp-content/uploads/2021/01/gfx100s_sample_04_thum-1.jpg',
                'user_id' => 1,
                'created_at' => DB::raw('current_timestamp'),
                'updated_at' => DB::raw('current_timestamp')
            ]
        ]);
    }
}
