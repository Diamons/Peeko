<?php

class ApiController extends BaseController {

	public function postUserLogin(){
		return dd(Input::all());
		return "EMAIL:".Input::get('email');
		/*
		$user = User::where('email', '=', Input::get('email'))->where('password', '='. Hash::make(Input::get('password')))->first();
		if($user){
			return $user->toJson();
		}else{
			return "A".Input::get('email');
		}
		*/
	}

	public function getIndex(){
		$redirect = Input::get('r');
		return Redirect::to('http://'.$redirect);
	}

	public function getStores($lat, $long){
		$stores = Store::with('promotions')->get();
		return $stores->toJson();
	}



}