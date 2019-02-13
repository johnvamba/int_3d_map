<?php

namespace Tests;

use Artisan;

trait InMemorySetup {

	public function setUp()
	{
		parent::setUp();
		$this->prepareForTest();
	}

	private function prepareForTest()
	{
		Artisan::call('migrate');
		// Artisan::call('db:seed'); //dont seed?
	}

	public function tearDown()
	{
		parent::tearDown();
	}
	
}