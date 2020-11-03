<?php

class TestCrudControllerTest extends \BasicApp\Test\ControllerTestCase
{

    public function testIndex()
    {
        $result = $this->withURI(site_url('test/crud/index'))
                       ->controller(\BasicApp\Test\Controllers\TestCrud::class)
                       ->execute('index');

        $this->assertTrue($result->isOK());
    }

}