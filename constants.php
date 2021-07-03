<?php

/**
 * Application constants.
 *
 * @package  news-web
 * @author   Husam A.
 */

/*
|--------------------------------------------------------------------------
| Define Root directory
|--------------------------------------------------------------------------
|
| application base directory
|
*/
if (!defined('ROOT')) define('ROOT', __DIR__);


/*
|--------------------------------------------------------------------------
| Define Log directory
|--------------------------------------------------------------------------
|
| debug and error logs directory 
|
*/
if (!defined('LOG')) define('LOG', ROOT . "/var/logs");

/*
|--------------------------------------------------------------------------
| Define cache directory
|--------------------------------------------------------------------------
|
| twig templates cache directory 
|
*/
if (!defined('CACHE')) define('CACHE', ROOT . "/var/cache");

/*
|--------------------------------------------------------------------------
| Define Log directory
|--------------------------------------------------------------------------
|
| debug and error logs directory 
|
*/
if (!defined('CONFIG')) define('CONFIG', ROOT . "/config");
