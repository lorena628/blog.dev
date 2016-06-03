<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@showWelcome');

Route::get('/resume', 'HomeController@showResume');

Route::get('/portfolio', 'HomeController@showPortfolio');

Route::get('/weathermap', 'HomeController@showWeathermap');

Route::get('/rolldice/{guess}', 'HomeController@showRolldice');

Route::resource('posts', 'PostsController');



Route::get('orm-test', function ()
{
    $posts = Post::all();
    return $posts;
});







            // in class solution
// Route::get('/rolldice/{guess}', function($guess)
// {   
//     $randomnum = mt_rand(1,6);

//     if($guess == $randomnum) {
//         $message = "you won";
//     }else{
//         $message = "you lost";
//     }
//     $data = [
//         'randomnum' =>$randomnum,
//         'guess' =>$guess,
//         'message' => $message
//     ];
//     return View::make("roll-dice")->with($data);
// });