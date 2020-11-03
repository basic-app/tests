<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link https://basic-app.com
 */
namespace BasicApp\Test\Models;

class TestModel extends \CodeIgniter\Model
{

    protected $table = 'test';

    protected $primaryKey = 'id';

    protected $returnType = \BasicApp\Test\Entities\Test::class; 

}