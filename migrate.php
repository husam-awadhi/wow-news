<?php

/**
 * migrate DB
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
*/
require __DIR__ . '/constants.php';

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
*/
require ROOT . '/vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Migrate
|--------------------------------------------------------------------------
*/

use App\DB;
use App\Helpers;

Helpers::log("Start Migration");
try {
    $db = DB::getConnection();

    //ddl 
    $db->prepare(
        "create table if not exists posts (
        `id` int(11) not null auto_increment,   
        `title` varchar(250) not null default '',       
        `article` mediumtext,     
        `synopsis`  varchar(1000) null,  
        `type` varchar(10),   
        `image` varchar(500)  null,    
        `show`  bool not null default true,
        `created_by` varchar(64) not null default '',
        `created` timestamp not null default current_timestamp,  
        `updated` timestamp not null default current_timestamp on update current_timestamp,
        primary key  (`id`))"
    )->execute();

    //done

} catch (\Exception $e) {
    Helpers::log("migration error - {$e->getMessage()}");
}
