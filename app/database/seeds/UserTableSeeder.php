<?php
	class UserTableSeeder extends Seeder{
		
		public function run(){
			DB::table('users')->delete();
			
			User::create(array(
				'email' => 'shahruktest@gmail.com',
				'password' => Hash::make('first_password')
			));
			/*
			User::create(array(
				'email' => 'test2@gmail.com',
				'password' => Hash::make('second_password')
			));
			*/
		}
	}