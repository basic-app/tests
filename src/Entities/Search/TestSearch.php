<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link https://basic-app.com
 */
namespace BasicApp\Test\Entities\Search;

class TestSearch extends \BasicApp\Test\Entities\Test
{

    public function applyToQuery($query)
    {
        if ($this->name)
        {
            $query->like('name', $this->name, 'both');
        }

        if ($this->id)
        {
            $query->where('id', $this->id);
        }

        if ($this->parent_id)
        {
            $query->where('parent_id', $this->parent_id);
        }
    }

}