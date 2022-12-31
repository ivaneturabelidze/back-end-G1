<?php

use Illuminate\Support\Facades\Route;
use App\Models\post;
use App\Models\comment;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('main', ['posts' => post::all()]);
});

Route::get('/post', [PostController::class, 'getPost']);

Route::get('/admin', [PostController::class, 'getAdmin']);