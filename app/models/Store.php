<?php

class Store extends Eloquent {
	protected $fillable = array('latitude', 'longitude', 'name', 'address', 'city', 'state', 'zipcode', 'icon');
	/** Define the relationship for promotions **/
	public function promotions(){
		return $this->hasMany('Promotion');
	}

	public function addStore($input){
		//var_dump($input);
		//die();
		//Append 2nd address together
		$address = $input['address'].' '.$input['address1'];
		$this->save();
		$id = $this->id;

		$store = $this->find($id);
		$store->icon = "/stores/".$id."/icon.png";
		$store->address = $address;
		$input['promotion']['image'] = "/stores/".$id."/banner.jpg";

		if(empty($input['website'])){
			$input['promotion']['menu'] = "/stores/".$id."/menu.jpg";
		}else{
			$input['promotion']['menu'] = "/api?r=".$input['website'];
		}
		

		$store->save();

		//Create new promotion
		$promotion = new Promotion($input['promotion']);
		$store->promotions()->save($promotion);

		$path = public_path() . '/stores/'.$id.'/';
		File::makeDirectory($path, $mode = 0775, true, false);
	}
}