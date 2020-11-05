<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link https://basic-app.com
 */
helper(['form']);

?>
<h1>Update</h1>

<?php

echo form_open('', ['method' => 'POST']);

echo form_input('name', (string) $entity->name, ['placeholder' => 'Name']);

echo form_submit(null, 'Update');

echo form_close();

foreach(array_merge($errors, $customErrors) as $error)
{
    echo '<div class="error">'  . $error . '</div>';
}

print_r(service('request')->getPost());