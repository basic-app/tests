<?php

use BasicApp\Test\Models\TestModel;

class CrudControllerTest extends \BasicApp\Test\ControllerTestCase
{

    protected $controllerClass = \BasicApp\Test\Controllers\Crud::class;

    public function testIndex()
    {
        $result = $this->controller($this->controllerClass)
            ->execute('index');

        $this->assertTrue($result->isOK());
        $this->assertTrue($result->see('Index', 'h1'));
        $this->assertTrue($result->see('Record #1', 'td'));
        $this->assertTrue($result->seeLink('2'));
    }

    public function testIndexSearchById()
    {
        $result = $this->withRequest($this->createRequest()->setGlobal('get', ['id' => 2]))
            ->controller($this->controllerClass)
            ->execute('index');

        $this->assertTrue($result->isOK());
        $this->assertTrue($result->see('Index', 'h1'));
        $this->assertTrue($result->see('Record #2', 'td'));
        $this->assertTrue($result->dontSee('2', 'a'));
    }

    public function testIndexSearchByName()
    {
        $result = $this->withRequest($this->createRequest()->setGlobal('get', ['name' => 'rd #2']))
            ->controller($this->controllerClass)
            ->execute('index');

        $this->assertTrue($result->isOK());
        $this->assertTrue($result->see('Index', 'h1'));
        $this->assertTrue($result->see('Record #2', 'td'));
        $this->assertTrue($result->dontSee('2', 'a'));
    }

    public function testIndexParentId()
    {
        $result = $this->withRequest($this->createRequest()->setGlobal('get', ['parentId' => '2']))
            ->controller($this->controllerClass)
            ->execute('index');

        $this->assertTrue($result->isOK());
        $this->assertTrue($result->see('Index', 'h1'));
        $this->assertTrue($result->see('Record #3', 'td'));
        $this->assertTrue($result->dontSee('2', 'a'));
    }

    public function testView()
    {
        $result = $this->withRequest($this->createRequest()->setGlobal('get', ['id' => '3']))
            ->controller($this->controllerClass)
            ->execute('view');

        $this->assertTrue($result->isOK(), 'isOk');
        $this->assertTrue($result->see('View', 'h1'));
        $this->assertTrue($result->see('3', 'td'));
        $this->assertTrue($result->see('2', 'td'));
        $this->assertTrue($result->see('Record #3', 'td'));
    }

    public function testCreate()
    {
        $request = $this->createRequest()
            ->setGlobal('get', ['parentId' => '2'])
            ->setGlobal('post', [
                'name' => 'Record #4'
            ]);

        $result = $this->withRequest($request)
            ->controller($this->controllerClass)
            ->execute('create');

        $this->assertTrue($result->isRedirect(), 'Response not redirect.');

        $entity = model(TestModel::class)->find(4);

        $this->assertTrue($entity ? true : false, 'Entity not found.');

        $this->assertEquals($entity->name, 'Record #4', 'Entity name incorrect.');

        $this->assertEquals($entity->parent_id, 2, 'parent_id');
    }

    public function testUpdate()
    {
        $request = $this->createRequest()
            ->setGlobal('get', ['id' => '2'])
            ->setGlobal('post', [csrf_token() => csrf_hash(), 
                'name' => 'Record #2 Updated'
            ]);

        $result = $this->withRequest($request)
            ->controller($this->controllerClass)
            ->execute('update');

        $this->assertTrue($result->isRedirect(), 'Response is not redirect.');

        $entity = model(TestModel::class)->find(2);

        $this->assertTrue($entity ? true : false, 'Entity not found.');

        $this->assertEquals($entity->name, 'Record #2 Updated', 'Entity name incorrect.');
    }

    public function testDelete()
    {
        $model = model(TestModel::class);

        $entity = $model->find(2);

        $this->assertTrue($entity ? true : false, 'Entity not found.');

        $request = $this->createRequest()->setGlobal('get', ['id' => '2']);

        $result = $this->withRequest($request)
            ->controller($this->controllerClass)
            ->execute('delete');

        $this->assertTrue($result->isRedirect(), 'Response is not redirect.');

        $entity = model(TestModel::class)->find(2);

        $this->assertFalse($entity ? true : false, 'Entity exists.');
    }

}