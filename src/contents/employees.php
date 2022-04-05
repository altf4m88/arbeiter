<?php
    if(!defined('INDEX')){
        die("");
    }
?>
        <h2>Employees Data</h2>
        <a class="btn btn-success mb-3" href="?page=add_employees">Add</a>

        <table class="table table-striped table-responsive">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Picture</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Date of Birth</th>
                    <th>Position</th>
                    <th>Info</th>
                    <th>Action</th>
                </tr>
            </thead>
        <tbody>
        <?php
            include "./src/lib/config.php";
            $query = mysqli_query($con, "SELECT * FROM employees LEFT JOIN work_position ON employees.workposition_id = work_position.workposition_id ORDER BY employees.employee_id DESC");
            $numb = 0;

            while($data = mysqli_fetch_array($query)){
            $numb++;   
        ?>
                <tr>
                    <td><?= $numb ?></td>
                    <td><img src="images/<?= $data['pict']?>" width="100px"></td>
                    <td><?= $data['employee_name']?></td>
                    <td><?= $data['gender']?></td>
                    <td><?= $data['dob']?></td>
                    <td><?= $data['workposition_name']?></td>
                    <td><?= $data['info']?></td>
                <td>
                    <a class="btn btn-warning btn-block"  href="?page=edit_employees&id=<?= $data['employee_id']?>">Edit</a>
                    <a class="btn btn-danger btn-block" href="?page=delete_employees&id=<?= $data['employee_id']?>&pict=<?=$data['pict']?>">Delete</a>
                </td>    
                </tr>
                <?php
                }
                ?>
        </tbody>
    </table>
