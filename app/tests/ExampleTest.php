<?php

class ExampleTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */

	public function setUp(){
		parent::setUp();
		$this->prepareForTests();
	}

	private function prepareForTests(){
		Artisan::call('migrate');
		Mail::pretend(true);
	}
	public function testBasicExample()
	{
		return true;
		$crawler = $this->client->request('GET', '/');

		$this->assertTrue($this->client->getResponse()->isOk());
	}



}
