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

Route::get('/simplesimon', 'HomeController@showSimplesimon');

Route::get('/calculator', 'HomeController@showCalculator');

Route::resource('posts', 'PostsController');

Route::get('/login', 'HomeController@showLoginForm');

Route::post('/login', 'HomeController@doLogin');

Route::get('/create', 'HomeController@doLogout');

Route::get('/edit', 'HomeController@doLogout');

Route::get('/index', 'HomeController@doLogin');

Route::get('/index', 'HomeController@doLogout');

Route::get('/css', 'HomeController@showCss');



// Route::get('orm-test', function ()
// {
//     $posts = Post::all();
//     return $posts;
// });







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