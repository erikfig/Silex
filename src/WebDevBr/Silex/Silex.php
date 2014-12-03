<?php

namespace WebDevBr\Silex;

use Silex\Application;

class Silex
{
	private $app;

	public function __construct()
	{
		$this->app = new Application();
		$this->app['debug'] = true;
	}

	public function run()
	{
		$this->app->run();
	}
}