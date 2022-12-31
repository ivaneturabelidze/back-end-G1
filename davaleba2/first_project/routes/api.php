<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/name', function ()
{
    return 'Ivane Turabelidze';
});

Route::get('/age', function ()
{
    return '20';
});

Route::get('/hobby', function ()
{
    return 'programming';
});

Route::get('/university', function ()
{
    return 'BTU';
});

Route::get('/year', function ()
{
    return '3';
});

Route::post('/', function ()
{
    $array->message = "წარმატებით განახლდა";
    return response()->json($array);
});

Route::put('/', function ()
{
    $array->message = "წარმატებით დაემატა";
    return response()->json($array);
});

Route::delete('/', function ()
{
    $array->message = "წარმატებით წაიშალა";
    return response()->json($array);
});