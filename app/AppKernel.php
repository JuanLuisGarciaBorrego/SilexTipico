<?php
/**
 * @author: JuanLuis
 * @date: 16/09/14 14:02
 */

use Silex\Application;
use Silex\Provider\TwigServiceProvider;
use Silex\Provider\UrlGeneratorServiceProvider;

$app = new Application();

$app->register(new TwigServiceProvider, array(
    'twig.path' => array(
        __DIR__."/Views",
        __DIR__."/../src/Tipico/Views",)
));
$app->register(new UrlGeneratorServiceProvider());