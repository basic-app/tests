<?php

namespace BasicApp\Test\Models;

class TestModel extends \CodeIgniter\Model
{

    protected $table = 'test';

    protected $primaryKey = 'id';

    protected $returnType = \BasicApp\Test\Entities\Test::class; 

}