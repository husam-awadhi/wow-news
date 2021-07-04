<?php

/**
 * DB seeder
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
use \Exception;
use tebazil\dbseeder\Seeder;

try {
    $db = DB::getConnection();
} catch (Exception $e) {
    Helpers::log("seeder error - {$e->getMessage()}");
}

$seeder = new Seeder($db);
$generator = $seeder->getGeneratorConfigurator();
$faker = $generator->getFakerConfigurator();

$seeder->table('posts')->columns([
    'title' => $faker->text,
    'article' => $faker->paragraph,
    'synopsis' => $faker->text,
    'type' => $faker->randomElement(['news', 'trending', 'breaking']),
    'image' => $faker->url,
    // 'show' => $faker->boolean($chanceOfGettingTrue = 80),
    'created_by' => $faker->firstName,
    // 'created' => $faker->dateTimeThisCentury($max = 'now', $timezone = null),
    // 'updated' => $faker->dateTimeThisCentury($max = 'now', $timezone = null),
])->rowQuantity(20);

$seeder->refill();
