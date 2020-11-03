<?php

$routes->add('test/crud', '\BasicApp\Test\Controllers\TestCrud::index');
$routes->add('test/crud/(:segment)', '\BasicApp\Test\Controllers\TestCrud::$1');