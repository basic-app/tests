<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link https://basic-app.com
 */
namespace BasicApp\Test\Models;

use BasicApp\Test\Entities\Test;

class TestModel extends \BasicApp\Model\BaseModel
{

    protected $table = 'test';

    protected $primaryKey = 'id';

    protected $returnType = Test::class; 

    protected $allowedFields = [
        'name',
        'parent_id'
    ];

    protected $validationRules = [
        'id' => [
            'label' => 'ID',
            'rules' => 'permit_empty'
        ],
        'created' => [
            'label' => 'Created',
            'rules' => 'permit_empty'
        ],
        'parent_id' => [
            'label' => 'Parent ID',
            'rules' => 'permit_empty|is_natural'
        ],
        'name' => [
            'label' => 'Name',
            'rules' => 'max_length[255]'
        ]
    ];

}