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

	public function getStores($lat, $long){
		$store = Store::all();
		return $store->toJson();
	}

}