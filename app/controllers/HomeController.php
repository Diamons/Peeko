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

	public function showWelcome() {	
		$title = "Home";
		View::share('title', $title);
		$this->layout->content = View::make('home'); //View::make('greeting')->withName('Shahruk');
	}

	public function postSubscribeEmail() {
		echo "A";
		die();
	}

	public function getQueensTechMeetup(){
		$ua = strtolower($_SERVER['HTTP_USER_AGENT']);
		if(stripos($ua,'android') !== false) { // && stripos($ua,'mobile') !== false) {
		    return Redirect::to('https://docs.google.com/forms/d/1ZCeyJ5bl2ZiM0NMEqSihIsz19lh3ZscLa38e3FDoafs/viewform?usp=send_form');
		}else{
			return Redirect::to('https://itunes.apple.com/us/app/peeko/id781198595?ls=1&mt=8');
		}
		//https://docs.google.com/forms/d/1ZCeyJ5bl2ZiM0NMEqSihIsz19lh3ZscLa38e3FDoafs/viewform?usp=send_form
	}

}
