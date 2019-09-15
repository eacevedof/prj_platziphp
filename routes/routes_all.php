<?php
$rweb = include_once "routes_web.php";
$rapi = include_once "routes_api.php";
$routes = array_merge($rweb,$rapi);