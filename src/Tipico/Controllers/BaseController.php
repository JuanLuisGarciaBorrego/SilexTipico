<?php
/**
 * @author: JuanLuis
 * @date: 16/09/14 14:55
 */

namespace Tipico\Controllers;

use Silex\Application;
use Silex\ControllerCollection;
use Silex\ControllerProviderInterface;

abstract class BaseController implements ControllerProviderInterface{

    protected $container;

    public function __construct(Application $app)
    {
        $this->container = $app;
    }

    abstract protected function addRoutes(ControllerCollection $controller);

    public function connect(Application $app)
    {
        $controllers = $app['controllers_factory'];

        $this->addRoutes($controllers);

        return $controllers;
    }

    public function render($template, array $parameter = [])
    {
        return $this->container['twig']->render($template, $parameter);
    }

}
 