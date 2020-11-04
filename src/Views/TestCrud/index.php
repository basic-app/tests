<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link https://basic-app.com
 */
helper(['form']);

?>

<h1>Index</h1>

<?php

echo form_open('', ['method' => 'GET']);

echo form_input('id', (string) $search->id, ['placeholder' => 'ID']);

echo form_input('name', (string) $search->name, ['placeholder' => 'Name']);

echo form_submit(null, 'Search');

echo form_close();

foreach(array_merge($searchErrors, $searchCustomErrors) as $error)
{
    echo '<div class="error">'  . $error . '</div>';
}

?>

<a href="<?= site_url('test/crud/create');?>">Create</a>

<table>

    <thead>

        <tr>

            <th><?= $searchModel->validationRules['id']['label'];?></th>
            <th><?= $searchModel->validationRules['created']['label'];?></th>
            <th><?= $searchModel->validationRules['parent_id']['label'];?></th>
            <th><?= $searchModel->validationRules['name']['label'];?></th>
            <th></th>
            <th></th>
            <th></th>
            
        </tr>

    </thead>

    <tbody>

        <?php if(count($elements) == 0):?>

            <tr>
                
                <td colspan="4">No items found.</td>

            </tr>

        <?php endif;?>

        <?php foreach($elements as $row):?>

            <tr data-id="<?= $row->id;?>">

                <td data-field="id"><?= $row->id;?></td>
                
                <td data-field="created"><?= $row->created;?></td>
                
                <td data-field="parent_id"><?= $row->parent_id;?></td>
                
                <td data-field="name"><?= $row->name;?></td>

                <td><a href="<?= site_url('test/crud/view');?>?id=<?= $row->id;?>">View</a></td>

                <td><a href="<?= site_url('test/crud/update');?>?id=<?= $row->id;?>">Update</a></td>

                <td><a href="<?= site_url('test/crud/delete');?>?id=<?= $row->id;?>">Delete</a></td>

            </tr>

        <?php endforeach;?>

    </tbody>

</table>

<?php if($pager):?>

    <?= $pager->links('default');?>

<?php endif;?>