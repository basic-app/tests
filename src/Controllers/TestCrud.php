<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link https://basic-app.com
 */
namespace BasicApp\Test\Controllers;

class TestCrud extends \BasicApp\Crud\BaseCrudController
{

    protected $modelClass = \BasicApp\Test\Forms\TestForm::class;

}