<?php
/**
 * Created by Erik Figueiredo.
 * Email: falecom@erikfigueiredo.com.br
 * Date: 05/12/14
 * Time: 19:11
 */

namespace WebDevBr\Silex;

use WebDevBr\Silex\Silex;

class Controllers
{

    private $app;
    private $factory;

    public function __construct(Silex $silex)
    {
        $this->app = $silex;
        $this->factory = $this->app['controllers_factory'];
    }

    public function getController()
    {
        return $this->factory;
    }
}