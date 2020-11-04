<?php

class TestCrudControllerTest extends \BasicApp\Test\ControllerTestCase
{

    public function testIndex()
    {
        $result = $this->controller(\BasicApp\Test\Controllers\TestCrud::class)
            ->execute('index');

        $this->assertTrue($result->isOK());
        $this->assertTrue($result->see('Index', 'h1'));
        $this->assertTrue($result->see('Record #1', 'td'));
        $this->assertTrue($result->seeLink('2'));
    }

    public function testIndexSearchById()
    {
        $result = $this->withRequest($this->createRequest()->setGlobal('get', ['id' => 2]))
            ->controller(\BasicApp\Test\Controllers\TestCrud::class)
            ->execute('index');

        $this->assertTrue($result->isOK());
        $this->assertTrue($result->see('Index', 'h1'));
        $this->assertTrue($result->see('Record #2', 'td'));
        $this->assertTrue($result->dontSee('2', 'a'));
    }

    public function testIndexSearchByName()
    {
        $result = $this->withRequest($this->createRequest()->setGlobal('get', ['name' => 'rd #2']))
            ->controller(\BasicApp\Test\Controllers\TestCrud::class)
            ->execute('index');

        $this->assertTrue($result->isOK());
        $this->assertTrue($result->see('Index', 'h1'));
        $this->assertTrue($result->see('Record #2', 'td'));
        $this->assertTrue($result->dontSee('2', 'a'));
    }

    public function testIndexParentId()
    {
        $result = $this->withRequest($this->createRequest()->setGlobal('get', ['parentId' => '2']))
            ->controller(\BasicApp\Test\Controllers\TestCrud::class)
            ->execute('index');

        $this->assertTrue($result->isOK());
        $this->assertTrue($result->see('Index', 'h1'));
        $this->assertTrue($result->see('Record #3', 'td'));
        $this->assertTrue($result->dontSee('2', 'a'));
    }

    public function testView()
    {
        $result = $this->withRequest($this->createRequest()->setGlobal('get', ['id' => '3']))
            ->controller(\BasicApp\Test\Controllers\TestCrud::class)
            ->execute('view');

        $this->assertTrue($result->isOK(), 'isOk');
        $this->assertTrue($result->see('View', 'h1'));
        $this->assertTrue($result->see('3', 'td'));
        $this->assertTrue($result->see('2', 'td'));
        $this->assertTrue($result->see('Record #3', 'td'));
    }

}