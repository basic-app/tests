<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link https://basic-app.com
 */
$routes->add('test/crud', '\BasicApp\Test\Controllers\Crud::index');
$routes->add('test/crud/(:segment)', '\BasicApp\Test\Controllers\Crud::$1');

$routes->add('test/array-crud', '\BasicApp\Test\Controllers\ArrayCrud::index');
$routes->add('test/array-crud/(:segment)', '\BasicApp\Test\Controllers\ArrayCrud::$1');