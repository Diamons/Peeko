<?php
	class PromotionTableSeeder extends Seeder{

		public function run(){
			DB::table('promotions')->delete();
			$promotion = Promotion::create(array(
				'name' => "Lunch Special $6.95",
				'description' => 'Come in for our lunch special between 12 PM - 4 PM and get a free drink!',
				'image' => 'bannernew.jpg',
				'store_id' => 1
			));
			var_dump($promotion->id);
		}
	}