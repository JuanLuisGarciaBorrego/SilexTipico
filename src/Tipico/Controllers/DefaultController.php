<?php
/**
 * @author: JuanLuis
 * @date: 16/09/14 14:28
 */

namespace Tipico\Controllers;

use Silex\ControllerCollection;
use Tipico\Controllers;


class DefaultController extends BaseController
{
    protected function addRoutes(ControllerCollection $controller)
    {
        $controller->get('/', array($this, 'defaultAction'))->bind('defaultPortada');
    }

    public function defaultAction()
    {
       return $this->render('Default/portada.twig');
    }
}
 