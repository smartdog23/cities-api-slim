<?php
/**
 * Created by Valdir P. Lourenco
 * Email: valdirpl@gmail.com
 * Date: 02/11/2014
 * Time: 12:04
 */

# autoload
include_once 'vendor/autoload.php';

define('DS', DIRECTORY_SEPARATOR);
define('PROJECT_ROOT', __DIR__);
define('APP_SRC', PROJECT_ROOT.DS.'src'.DS);

$app = new \Slim\Slim();

include_once APP_SRC.'routes.php';

$app->run();