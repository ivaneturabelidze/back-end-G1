<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            [
                'question' => 'question 1?',
                'picture' => 'https://fujifilm-x.com/wp-content/uploads/2021/01/gfx100s_sample_10_thum.jpg',
                'answer_1' => 'ans_1',
                'answer_2' => 'ans_2',
                'answer_3' => 'ans_3',
                'answer_4' => 'ans_4',
                'correct_answer' => 'ans_2',
                'position' => 1,
                'quiz_id' => 1
            ],
            [
                'question' => 'question 2?',
                'picture' => 'https://images.pexels.com/photos/276267/pexels-photo-276267.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'answer_1' => 'ans_1',
                'answer_2' => 'ans_2',
                'answer_3' => 'ans_3',
                'answer_4' => 'ans_4',
                'correct_answer' => 'ans_1',
                'position' => 2,
                'quiz_id' => 1
            ],
            [
                'question' => 'question 3?',
                'picture' => 'https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg',
                'answer_1' => 'ans_1',
                'answer_2' => 'ans_2',
                'answer_3' => 'ans_3',
                'answer_4' => 'ans_4',
                'correct_answer' => 'ans_2',
                'position' => 3,
                'quiz_id' => 1
            ],
            [
                'question' => 'question 4?',
                'picture' => 'https://images.panda.org/assets/images/pages/welcome/orangutan_1600x1000_279157.jpg',
                'answer_1' => 'ans_1',
                'answer_2' => 'ans_2',
                'answer_3' => 'ans_3',
                'answer_4' => 'ans_4',
                'correct_answer' => 'ans_4',
                'position' => 4,
                'quiz_id' => 1
            ],
            [
                'question' => 'question 1?',
                'picture' => 'https://www.metoffice.gov.uk/binaries/content/gallery/metofficegovuk/hero-images/advice/maps-satellite-images/satellite-image-of-globe.jpg',
                'answer_1' => 'ans_1',
                'answer_2' => 'ans_2',
                'answer_3' => 'ans_3',
                'answer_4' => 'ans_4',
                'correct_answer' => 'ans_2',
                'position' => 1,
                'quiz_id' => 2
            ],
            [
                'question' => 'question 2?',
                'picture' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTsp7DtCfj_FWNv-cIrKfIHkeeV9wi94vxfMA&usqp=CAU',
                'answer_1' => 'ans_1',
                'answer_2' => 'ans_2',
                'answer_3' => 'ans_3',
                'answer_4' => 'ans_4',
                'correct_answer' => 'ans_4',
                'position' => 2,
                'quiz_id' => 2
            ],
            [
                'question' => 'question 3?',
                'picture' => 'https://swall.teahub.io/photos/small/21-218810_beautiful-wallpapers-download-for-mobile-download-beautiful-images.jpg',
                'answer_1' => 'ans_1',
                'answer_2' => 'ans_2',
                'answer_3' => 'ans_3',
                'answer_4' => 'ans_4',
                'correct_answer' => 'ans_3',
                'position' => 3,
                'quiz_id' => 2
            ],
            [
                'question' => 'question 4?',
                'picture' => 'https://cdn.pixabay.com/photo/2018/08/14/13/23/ocean-3605547__340.jpg',
                'answer_1' => 'ans_1',
                'answer_2' => 'ans_2',
                'answer_3' => 'ans_3',
                'answer_4' => 'ans_4',
                'correct_answer' => 'ans_1',
                'position' => 4,
                'quiz_id' => 2
            ]
        ]);
    }
}
