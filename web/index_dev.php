<?php
/**
 * @author: JuanLuis
 * @date: 29/09/14 20:17
 */

require_once __DIR__.'/../vendor/autoload.php';

require __DIR__.'/../app/AppKernel.php';

require __DIR__.'/../app/dev.php';

require __DIR__.'/../app/Routes.php';

$app->run();