<?php

class TestCase extends Illuminate\Foundation\Testing\TestCase {

	/**
	 * Creates the application.
	 *
	 * @return \Symfony\Component\HttpKernel\HttpKernelInterface
	 */
	public function createApplication()
	{
		$unitTesting = true;

		$testEnvironment = 'testing';

		return require __DIR__.'/../../bootstrap/start.php';
	}

	public function setUp(){
		parent::setUp();
		$this->setUpDb();
	}

	private function setUpDb(){
		$app = $this->createApplication();
		$app->make('artisan')->call('migrate');
		$app->make('artisan')->call('db:seed');
	}


}
