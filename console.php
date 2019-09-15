#!/usr/bin/env php
<?php
require __DIR__."/vendor/autoload.php";
use Illuminate\Database\Capsule\Manager as Capsule;

$oDotenv = new Dotenv\Dotenv(__DIR__ );
$oDotenv->load();

$oEloquent = new Capsule;
$oEloquent->addConnection([
    "driver"    => getenv("DB_DRIVER"),
    "host"      => getenv("DB_HOST"),
    "database"  => getenv("DB_NAME"),
    "username"  => getenv("DB_USER"),
    "password"  => getenv("DB_PASS"),
    "charset"   => "utf8",
    "collation" => "utf8_unicode_ci",
    "prefix"    => "",
    "port"      => getenv("DB_PORT")
]);

// Make this Capsule instance available globally via static methods... (optional)
$oEloquent->setAsGlobal();
// Setup the Eloquent ORM... (optional; unless you"ve used setEventDispatcher())
$oEloquent->bootEloquent();

use Symfony\Component\Console\Application;
$oSymfonyConsole = new Application();
$oSymfonyConsole->add(new \App\Commands\CreateUserCommand());
$oSymfonyConsole->add(new \App\Commands\SendMailsCommand());
$oSymfonyConsole->run();