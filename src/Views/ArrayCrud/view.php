<h1>View</h1>
<table>
    <tbody>
        <tr>
            <th>ID</th>
            <td><?= $entity['id'];?></td>
        </tr> 
        <tr>
            <th>Parent ID</th>
            <td><?= $entity['parent_id'];?></td>
        </tr>
        <tr>
            <th>Created</th>
            <td><?= $entity['created_at'];?></td>
        </tr>
        <tr>
            <th>Name</th>
            <td><?= $entity['name'];?></td>
        </tr>
    </tbody>
</table>