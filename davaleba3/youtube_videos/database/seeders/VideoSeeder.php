<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('videos')->insert([
            [
                'title' => 'you could stop at five or six stores',
                'description' => 'explanation: https://www.youtube.com/watch?v=NE0fQCTn3NE&t=0s',
                'link' => 'https://www.youtube.com/watch?v=YCeQLeQiRP4'
            ],
            [
                'title' => 'Corn is the best crop & wheat is worst',
                'description' => 'creds: not me lol',
                'link' => 'https://www.youtube.com/shorts/hvoagWSOw_Y'
            ],
            [
                'title' => "If I'm not a bush, I'm not no one",
                'description' => 'FOR ANY LICENSING OR GENERAL BUSINESS ENQUIRIES PLEASE CONTACT lukecostin124@gmail.com',
                'link' => 'https://www.youtube.com/shorts/Z9LlEIDJL08'
            ],
            [
                'title' => 'Can you tell the time?',
                'description' => '',
                'link' => 'https://www.youtube.com/watch?v=zhf1pIl007o'
            ],
            [
                'title' => "It's pronounced GIF",
                'description' => 'This is the only time you can say Shadow is based.',
                'link' => 'https://www.youtube.com/watch?v=Nrk8sqZfsgI'
            ]
        ]);
    }
}
