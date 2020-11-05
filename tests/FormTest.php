<?php

use BasicApp\Form\Form;
use CodeIgniter\Entity;

class FormTest extends \BasicApp\Test\TestCase
{

    protected $hidden = '<input type="hidden" name="hidden" value="" style="display:none;" />';

    protected $input = '<input type="text" name="input" value=""  />';

    protected $fieldsetClose = '</fieldset>';

    protected function createForm()
    {
        return new Form;
    }

    public function testInputs()
    {
        $form = $this->createForm();

        $entity = new Entity;

        $this->assertEquals(trim($form->hidden($entity, 'hidden')), $this->hidden, 'hidden');
        $this->assertEquals(trim($form->input($entity, 'input')), $this->input, 'input');
        $this->assertEquals(trim($form->fieldsetClose($entity, 'fieldsetClose')), $this->fieldsetClose, 'fieldsetClose');
    }

}