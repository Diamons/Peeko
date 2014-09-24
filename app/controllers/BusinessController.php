<?php
	
	class BusinessController extends BaseController{

		protected $layout = "layouts.business-landing";

		public function getIndex() {	
			$title = "For Business";
			View::share('title', $title);
			$this->layout->content = View::make('business-index')->withName('Shahruk');
		}

		public function postIndex() {
			var_dump(Input::get('user-email'));
			die("HEY!");
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
			$stores = Store::with('promotions')->get();
			$this->layout->content = View::make('dashboard-index')->with('stores', $stores);
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
			
			//Establish the variables
			$iconFile = Input::file('iconUpload');
			$bannerFile = Input::file('bannerUpload');
			$s3 = App::make('aws')->get('s3');
			
			//Generate the key for each and store for reference. This is uniquely generated.
			if(!empty($iconFile)){
				$keyIcon = 'icon-'.time().'-'.$iconFile->getClientOriginalName();
				//Upload the icon and banner
				$s3->putObject(array(
				    'Bucket'     => 'cdn.peekoapp.com',
				    'Key'        => $keyIcon,
				    'SourceFile' => $iconFile->getRealPath(),
				));
			}
			
			if(!empty($bannerFile)){
				$keyBanner = 'banner-'.time().'-'.$bannerFile->getClientOriginalName();

				$s3->putObject(array(
				    'Bucket'     => 'cdn.peekoapp.com',
				    'Key'        => $keyBanner,
				    'SourceFile' => $bannerFile->getRealPath(),
				));
			}
			

			if(!empty($iconFile)){
				$input['icon'] = '/api?r=http://cdn.peekoapp.com/'.$keyIcon;
			}

			if(!empty($bannerFile)){
				$input['promotion']['image'] = '/api?r=http://cdn.peekoapp.com/'.$keyBanner;
			}

			//Are we editing or adding a new one?
			if(empty($store)){
				$store = new Store($input);
				$store->addStore($input);
			}else{
				$store->update($input);
			}
			
			return Redirect::to('/business/dashboard');
		}
		
	}