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

	protected $layout = "layouts.default";

	public function showWelcome()
	{	
		$title = "Home";
		View::share('title', $title);
		$this->layout->content = View::make('home'); //View::make('greeting')->withName('Shahruk');
	}

}
