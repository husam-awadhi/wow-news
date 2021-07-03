<?php
/**
 * Basic news website
 *
 * @package  news-web
 * @author   Husam A.
 */

declare(strict_types=1);

define('APP_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Load Constants
|--------------------------------------------------------------------------
|
| Default values that can be used throughout the app
| a way to make our life easier.
|
*/
require __DIR__ . '/constants.php';

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels great to relax.
|
*/
require ROOT . '/vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| 
|--------------------------------------------------------------------------
|
|
*/
require CONFIG . '/Routes.php';
