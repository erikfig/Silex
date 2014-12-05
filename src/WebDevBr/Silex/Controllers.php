<?php
/**
 * Created by Erik Figueiredo.
 * Email: falecom@erikfigueiredo.com.br
 * Date: 05/12/14
 * Time: 19:11
 */

namespace WebDevBr\Silex;

use Silex\Application;

class Controllers
{

    private $app;
    private $factory;

    public function __construct(Application $silex)
    {
        $this->app = $silex;
        $this->factory = $this->app['controllers_factory'];
    }

    public function getController()
    {
        return $this->factory;
    }
}