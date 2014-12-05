<?php

namespace WebDevBr\Silex;

use Silex\Application;
use WebDevBr\Doctrine\Doctrine;

class Silex
{
    private $app;

    public function __construct($isDevMode = false)
    {
        $this->app = new Application();
        $this->app['debug'] = false;
        if ($isDevMode)
            $this->app['debug'] = true;
    }

    public function setDoctrine(Doctrine $doctrine)
    {
        $this->app['doctrine'] = $this->app->share(function() use($doctrine) {
            return $doctrine->getEntityManager();
        });
    }

    public function getApp()
    {
        return $this->app;
    }

    public function setController($name, $controller)
    {
        $this->app->mount($name, $controller);
    }

    public function run()
    {
        $this->app->run();
    }
}