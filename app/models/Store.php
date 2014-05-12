<?php

class Store extends Eloquent {

	/** Define the relationship for promotions **/
	public function promotions(){
		return $this->hasMany('Promotion');
	}
}