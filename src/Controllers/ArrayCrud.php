<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link https://basic-app.com
 */
namespace BasicApp\Test\Controllers;

use BasicApp\Test\Forms\ArrayForm;
use BasicApp\Test\Models\ArrayModel;
use BasicApp\Test\Models\Search\ArraySearchModel;

class ArrayCrud extends \BasicApp\Crud\CrudController
{

    protected $viewsNamespace = 'BasicApp\Test\Views\ArrayCrud';

    protected $modelClass = ArrayModel::class;

    protected $formModelClass = ArrayForm::class;

    protected $searchModelClass = ArraySearchModel::class;

    protected $parentKey = 'parent_id';

    protected $perPage = 1;

    protected $backUrl = '/test/array-crud';

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