<?php
	class StoreTableSeeder extends Seeder{
		
		public function run(){
			DB::table('stores')->delete();
			Store::create(array(
				'latitude' => '40.755700',
				'longitude' => '-73.972921',
				'name' => 'Shahruk\'s Test Shop',
				'icon' => 'test.png'
			));
		}
	}