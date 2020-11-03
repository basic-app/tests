<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link https://basic-app.com
 */
namespace BasicApp\Test\Controllers;

use BasicApp\Test\Forms\TestForm;
use BasicApp\Test\Models\Search\TestSearchModel;

class TestCrud extends \BasicApp\Crud\CrudController
{

    protected $viewsNamespace = 'BasicApp\Test\Views\TestCrud';

    protected $modelClass = TestForm::class;

    protected $searchModelClass = TestSearchModel::class;

    protected $parentKey = 'parent_id';

    protected $perPage = 1;

    public function index()
    {
        return $this->remapAction('index');
    }

    public function create()
    {
        return $this->remapAction('create');
    }

    public function update()
    {
        return $this->remapAction('update');
    }

    public function view()
    {
        return $this->remapAction('view');
    }

    public function delete()
    {
        return $this->remapAction('delete');
    }

}