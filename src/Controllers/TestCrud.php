<?php

namespace BasicApp\Test\Controllers;

class TestCrud extends \BasicApp\Crud\BaseCrudController
{

    protected $modelClass = \BasicApp\Test\Forms\TestForm::class;

}