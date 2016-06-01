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

Route::get('/', function()
{
	return View::make('hello');
});


// Route::get('/sayhello/{name}', function($name)
// {
//     if ($name == "Chris") {
//         return Redirect::to('/');
//     } else {
//         return "Hello, $name!";
//     }
// });

//will default to class if there is no parameter
Route::get('/sayhello/{name?}', function($name = 'class')
{
    if ($name == "Chris") {
        return Redirect::to('/');
    } else {
        return "Hello, $name!";
    }
});

Route::get('/resume', function()
{
    return View::make("resume");
});

Route::get('/portfolio', function()
{
    return View::make("portfolio");
});



Route::get('/rolldice/{guess}', function($guess)
 {   
     $randomnum = mt_rand(1,6);

    if ($guess == $randomnum) {
        return "Your guess is correct!";
    }else{
        $data = array('randomnum' => $randomnum);
        return View::make("roll-dice")->with($data);
    }
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