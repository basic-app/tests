<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link https://basic-app.com
 */
namespace BasicApp\Test\Models\Search;

class TestArraySearchModel extends TestSearchModel
{

    protected $returnType = 'array';

    protected $allowedFields = [
        'id',
        'created',
        'parent_id',
        'name'
    ];

    public function entityApplyToQuery($entity, $query)
    {
        if ($entity['name'])
        {
            $query->like('name', $entity['name'], 'both');
        }

        if ($entity['id'])
        {
            $query->where('id', $entity['id']);
        }

        if ($entity['parent_id'])
        {
            $query->where('parent_id', $entity['parent_id']);
        }
    }

}