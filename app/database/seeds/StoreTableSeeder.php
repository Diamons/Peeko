<?php
	class StoreTableSeeder extends Seeder{
		
		public function run(){
			DB::table('stores')->delete();
			$store = Store::create(array(
				'latitude' => '40.755700',
				'longitude' => '-73.972921',
				'name' => 'Shahruk\'s Test Shop',
				'icon' => '/img/pizzanew.png',
				'address' => '8621 75st',
				'city' => 'Woodhaven',
				'state' => 'New York',
				'zipcode' => '11421'
			));
		}
	}