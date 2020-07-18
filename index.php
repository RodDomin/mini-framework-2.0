<?php
require './vendor/autoload.php';

use Routes\Routes;

$routes = new Routes();

$routes->bootWebRouter();
$routes->bootApiRouter();
$routes->bootSystem();
