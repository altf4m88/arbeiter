<?php
    if(!defined('INDEX')) { die(""); }
?>

<h2>Work Position Data</h2>
<a href="?page=add_workposition" class="btn btn-primary">New Position</a>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Number</th>
            <th>Workposition Name</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    <?php
        $query = mysqli_query($con, "SELECT * FROM work_position ORDER BY workposition_id DESC");
        $i = 0;
        while($data = mysqli_fetch_array($query)){
            $i++;
        
          ?>
        <tr>
            <td><?= $i ?></td>
            <td><?= $data['workposition_name'] ?></td>
            <td>
                <a href="?page=edit_workposition&id=<?= $data['workposition_id'] ?>" class="btn btn-warning btn-block">Edit</a>
                <a href="?page=delete_workposition&id=<?= $data['workposition_id'] ?>" class="btn btn-danger btn-block">Delete</a>
            </td>
        </tr>

    <?php
        }
    ?>
    </tbody>
</table>

