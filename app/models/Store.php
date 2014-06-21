<?php

class Store extends Eloquent {
	protected $fillable = array('latitude', 'longitude', 'name', 'address', 'city', 'state', 'zipcode', 'icon');
	/** Define the relationship for promotions **/
	public function promotions(){
		return $this->hasMany('Promotion');
	}

	public function addStore($input){
		$input['promotion']['end_date'] = DateTime::createFromFormat('Y-m-d', $input['promotion']['end_date']);
		//$input['promotion']['end_date'] = time();
		//var_dump($input);
		//var_dump($input['promotion']['end_date']);
		//var_dump(Carbon::now());
		//die();
		//Append 2nd address together
		if(isset($input['latitude']) && $input['latitude'] > 0){
			$address = $input['address'].' '.$input['address1'];
			$this->save();
			$id = $this->id;

			$store = $this->find($id);
			if(empty($store->icon)){
				$store->icon = "/stores/".$id."/icon.png";
			}
			$store->address = $address;
			$input['promotion']['image'] = "/stores/".$id."/banner.jpg";

			if(empty($input['menu'])){
				$store->menu = "/stores/".$id."/menu.jpg";
			}else{
				$store->menu = "/api?r=".$input['website'];
			}
			
			//die(print_r($input));
			$store->save();

			//var_dump($input['promotion']['end_date']);
			//die();
			//Create new promotion
			$promotion = new Promotion($input['promotion']);
			$store->promotions()->save($promotion);

			$path = public_path() . '/stores/'.$id.'/';
			File::makeDirectory($path, $mode = 0775, true, false);
		}
	}
}