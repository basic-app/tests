<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link https://basic-app.com
 */
namespace BasicApp\Test;

use CodeIgniter\Test\ControllerTester;

class ControllerTestCase extends \CodeIgniter\Test\CIDatabaseTestCase
{

    use ControllerTester;

    protected $refresh = true;
    
    protected $seed = 'BasicApp\Test\Database\Seeds\TestSeeder';

    protected $namespace = 'BasicApp\Test';

}