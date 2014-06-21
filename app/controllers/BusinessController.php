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
				return Redirect::intended('/business/dashboard');
			}else{
				return Redirect::back()->with('error', 'That username and password is incorrect.');
			}
		}

		public function getRegister(){
			$title = "Register for Business";
			View::share('title', $title);
			$this->layout->content = View::make('business-register');
		}
		
		public function getSupport(){
			$title = "Support";
			View::share('title', $title);
			$this->layout->content = View::make('business-support');
		}

		public function getDashboard(){
			$this->layout = View::make('layouts.dashboard');
			$title = "Business Dashboard";
			View::share('title', $title);

			$this->layout->content = View::make('dashboard-index')->with('stores', Store::with('promotions')->get());
		}

		public function getAdd($id=NULL){
			$store = Store::find($id);
			if(Auth::check()){
				$this->layout = View::make('layouts.dashboard');
				$title = "Add Your Business";
				View::share('title', $title);
				$this->layout->content = View::make('dashboard-add')->with('store', $store);
			}else{
				Redirect::back();
			}
			
		}

		public function postAdd($id=NULL){
			$store = Store::find($id);
			$this->layout = null;
			$input = Input::get();
			if(empty($store)){
				$store = new Store($input);
				$store->addStore($input);
			}else{
				$store->update($input);
			}
			
			return Redirect::to('/business/dashboard');
		}
		
	}