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

$app->container->singleton('db', function () {
    return new PDO('mysql:host=localhost;dbname=cities_api;charset=utf8', 'cities_api', 'cities_api') or exit('error');
});

include_once APP_SRC.'routes.php';

$app->run();