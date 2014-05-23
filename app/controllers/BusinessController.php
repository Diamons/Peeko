<?php
	
	class BusinessController extends BaseController{

		protected $layout = "layouts.business";

		public function getIndex()
		{	
			$title = "For Business";
			View::share('title', $title);
			$this->layout->content = View::make('business-index')->withName('Shahruk');
		}

		public function postLogin(){
			$this->layout = null;
			$input = Input::get();
			$user = new User($input);
			if($user->login()){
				return Redirect::intended('dashboard');
			}else{
				return Redirect::back()->with('error', 'That username and password is incorrect.');
			}
		}

		public function getRegister(){
			$title = "Register for Business";
			View::share('title', $title);
			$this->layout->content = View::make('business-register');
		}
		/*
		public function getPricing(){
			$title = "Pricing Plans";
			View::share('title', $title);
			$this->layout->content = View::make('business-pricing');
		}
		*/
	}