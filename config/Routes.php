<?php

use App\Helpers;
use eftec\routeone\RouteOne;
use App\Controller\HomeController;

$route = new RouteOne();
$route->setDefaultValues('Home', 'index');   // if controller or action is empty then it will use the default values

$route->fetch();

try {
    $route->callObjectEx('App\Controller\{controller}Controller');
} catch (\Exception $e) {
    Helpers::log((string) $e->getMessage(), 'ERROR');
    $route->callObjectEx(
        'App\Controller\ErrorController',
        false, // if error then it throw an error
        'indexAction' // the method to call (get or post)
    );
}
