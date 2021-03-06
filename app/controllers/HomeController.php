<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	public function showWelcome()
	{
		return View::make('hello');
	}


	public function showLoginForm()
	{
		if (Auth::check()) {
			return Redirect::action('PostsController@index');
		} else {
	    	return View::make("login");
		}
	} 
	public function doLogin()
	{	
		$email= Input::get('email');
		$password = Input::get('password');

		if (Auth::attempt(array('email' => $email, 'password' => $password))) {
	    	return Redirect::action('PostsController@index');
		} else {
			Session::flash('errorMessage', 'Please enter correct information');
			$value = Session::get('errorMessage');
		    // login failed, go back to the login screen
			return Redirect::back();
		}
	}
	public function doLogout()
	{
		Auth::logout();
		return Redirect::action('PostsController@index');
	}

	public function showResume()
	{
		return View::make("resume");
	}
	public function showPortfolio()
	{
		return View::make("portfolio");
	}
	public function showWeathermap()
	{
		return View::make("weathermap");
	}

	public function showSimplesimon()
	{
		return View::make("simplesimon");
	}

	public function showCalculator()
	{
		return View::make("calculator");
	}



	public function showRolldice($guess)
	{
		$randomnum = mt_rand(1,6);

	    if ($guess == $randomnum) {
	        return "Your guess is correct!";
	    }else{
	        $data = array('randomnum' => $randomnum);
	        return View::make("roll-dice")->with($data);
	    }
	}
}
