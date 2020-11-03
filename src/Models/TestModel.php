<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link https://basic-app.com
 */
namespace BasicApp\Test\Models;

use BasicApp\Test\Entities\Test;

class TestModel extends \CodeIgniter\Model
{

    protected $table = 'test';

    protected $primaryKey = 'id';

    protected $returnType = Test::class; 

    protected $validationRules = [
        'id' => [
            'label' => 'ID'
        ],
        'created' => [
            'label' => 'Created'
        ],
        'parent_id' => [
            'label' => 'Parent ID'
        ],
        'name' => [
            'label' => 'Name'
        ]
    ];

}