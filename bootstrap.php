<?php
/**
 * Created by Valdir P. Lourenco
 * Email: valdirpl@gmail.com
 * Date: 02/11/2014
 * Time: 12:04
 */

# autoload
include_once 'vendor/autoload.php';

//error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
//ini_set('display_errors','On');

define('DS', DIRECTORY_SEPARATOR);
define('PROJECT_ROOT', __DIR__);
define('APP_SRC', PROJECT_ROOT.DS.'src'.DS);

$app = new \Slim\Slim(array());

$app->response()->header('Content-Type', 'application/json');

$app->container->singleton('db', function () {
//    return = new PDO('mysql:host=localhost;dbname=cities_api;charset=utf8', 'cities_api', 'cities_api');
    return new \Respect\Relational\Mapper(new PDO('mysql:host=localhost;dbname=cities_api;charset=utf8', 'cities_api', 'cities_api'));
});

include_once APP_SRC.'routes.php';

$app->run();