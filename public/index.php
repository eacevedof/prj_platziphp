<?php
//public/index.php

ini_set("display_errors", 1);
ini_set("display_starup_error", 1);
error_reporting(E_ALL);
require_once "../vendor/autoload.php";

session_start();
$oDotenv = new Dotenv\Dotenv(__DIR__."/..");
$oDotenv->load();

use App\Middlewares\AuthenticationMiddleware;
use Illuminate\Database\Capsule\Manager as Capsule;
use Aura\Router\RouterContainer;
use WoohooLabs\Harmony\Harmony;
use WoohooLabs\Harmony\Middleware\DispatcherMiddleware;
use WoohooLabs\Harmony\Middleware\HttpHandlerRunnerMiddleware;
use Zend\Diactoros\Response;
use Zend\HttpHandlerRunner\Emitter\SapiEmitter;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$oDependInyector = new DI\Container();

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

$oLogger = new Logger("app");
$oLogger->pushHandler(new StreamHandler(__DIR__ . "/../logs/app.log", Logger::WARNING));

$oZendRequest = Zend\Diactoros\ServerRequestFactory::fromGlobals(
    $_SERVER,
    $_GET,
    $_POST,
    $_COOKIE,
    $_FILES
);

$oAuraRouterContainer = new RouterContainer();
$oRouteMap = $oAuraRouterContainer->getMap();
include_once __DIR__."/../routes/routes_all.php";

foreach($r as $route)
    $oRouteMap->{$route["action"]}($route["name"],$route["path"],[$route["controller"],$route["method"]]);

try{
    $oHarmonyMiddleware = new Harmony($oZendRequest, new Response());

    $oHarmonyMiddleware->addMiddleware(new HttpHandlerRunnerMiddleware(new SapiEmitter()));
    if (getenv("DEBUG") === "true") {
        $oHarmonyMiddleware->addMiddleware(new \Franzl\Middleware\Whoops\WhoopsMiddleware);
    }
    $oHarmonyMiddleware->addMiddleware(new Middlewares\AuraRouter($oAuraRouterContainer))
        ->addMiddleware(new AuthenticationMiddleware())
        ->addMiddleware(new DispatcherMiddleware($oDependInyector,"request-handler"));
    $oHarmonyMiddleware();
} catch (Exception $e) {
    $oLogger->error($e->getMessage());
    $oZendEmitter = new SapiEmitter();
    $oZendEmitter->emit(new Response\EmptyResponse(500));
} catch (Error $e) {
    $oLogger->error($e->getMessage());
    $oZendEmitter = new SapiEmitter();
    $oZendEmitter->emit(new Response\EmptyResponse(500));
}

