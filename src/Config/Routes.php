<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link https://basic-app.com
 */
$routes->add('test/crud', '\BasicApp\Test\Controllers\TestCrud::index');
$routes->add('test/crud/(:segment)', '\BasicApp\Test\Controllers\TestCrud::$1');