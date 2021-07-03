<?php

use App\Helpers;
use eftec\routeone\RouteOne;
use App\Controller\HomeController;

$route=new RouteOne();
$route->setDefaultValues('Home','index');   // if controller or action is empty then it will use the default values

$route->fetch();

try {
    $route->callObjectEx('App\Controller\{controller}Controller');
} catch (\Exception $e) {
    Helpers::log((string) $e->getMessage());
    //TODO: go to error page
}
