<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            [
                'user' => 'user_1',
                'content' => 'content_1',
                'post_id' => 3
            ],
            [
                'user' => 'user_2',
                'content' => 'content_2',
                'post_id' => 3
            ],
            [
                'user' => 'user_3',
                'content' => 'content_3',
                'post_id' => 4
            ]            
        ]);
    }
}
