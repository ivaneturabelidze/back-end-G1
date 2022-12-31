<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'title' => 'title_1',
                'content' => 'con_1'
            ],
            [
                'title' => 'title_2',
                'content' => 'con_2'
            ],
            [
                'title' => 'title_3',
                'content' => 'con_3'
            ],
            [
                'title' => 'title_4',
                'content' => 'con_4'
            ]
        ]);
    }
}
