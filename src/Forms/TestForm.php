<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link https://basic-app.com
 */
namespace BasicApp\Test\Forms;

class TestForm extends \BasicApp\Test\Models\TestModel
{

    public function __construct()
    {
        parent::__construct();

        $this->validationRules['name']['rules'] .= '|required';
    }

}