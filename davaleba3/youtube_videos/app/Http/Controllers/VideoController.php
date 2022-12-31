<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class VideoController extends Controller
{
    public function listVideos(){
        $videos = Video::all();
        return view('videos', ['videoList' => $videos]);
    }
}
