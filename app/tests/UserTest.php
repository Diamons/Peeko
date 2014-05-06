<?php
	class UserTest extends PHPUnit_Framework_TestCase{

		//Check that the database is clean
		public function testNoUsers(){
			$users = User::all();
			$this->assertEquals(count($users), 0);
		}

		//Test that users can login and a find and search works.
		public function testUserRegistrationAndSave(){
			
			User::create(array(
				'email' => 'thisisatest@gmail.com',
				'password' => Hash::make('first_password')
			));

			$user = User::where('email', '=', 'thisisatest@gmail.com')->first();
			$this->assertEquals('thisisatest@gmail.com', $user->email);
		}


		//Make sure that the email is a proper email address
		public function testShouldNotSaveWithInvalidEmail(){
			$invalidUser = new User(array(
				'email' => 'thisisatest',
				'password' => Hash::make('first_password')
			));
			
			$this->assertEquals($invalidUser->save(), false, 'Incorrect email address');
		}

		//Make sure that if the email is not filled out, it can't be saved.
		public function testEmailIsFilled(){
			$invalidUser = new User(array(
				'password' => Hash::make('first_password')
			));
			
			$this->assertEquals($invalidUser->save(), false, 'Email not filled out!');
		}

		public function testUserActive(){
			$invalidUser = new User(array(
				'email' => 'test@test.com',
				'password' => Hash::make('first_password')
			));

			$invalidUser->save();

			//Has active = 1
			$validUser = new User(array(
				'email' => 'test@test.com',
				'password' => Hash::make('first_password'),
				'active' => 1
			));
			

			$this->assertEquals(false, $validUser->save(), 'Duplicate user');


			$validUser->email = 'test2@test.com';
			$validUser->save();

			//User with no active can't login
			$login = $invalidUser->login();
			$this->assertEquals(false, $login, 'Inactive user logged in');

			//Reset password to plaintext
			$validUser->password = "first_password";
			$login = $validUser->login();
			$this->assertEquals(true, $login, 'Active user logged in');
		}

	}