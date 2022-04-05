<?php
    if(!defined('INDEX')) { die(""); }
?>

<div class="jumbotron mt-3">
    <h2>Welcome to <span class="font-weight-bolder text-primary">Arbeiter<span class="font-weight-light text-black-50">Management</span></span></h2> 
    <h4>You logged in as Admin</h4>
</div>

<?php
    $employees_num = mysqli_num_rows(mysqli_query($con, "SELECT * FROM employees"));
    $workposition_num = mysqli_num_rows(mysqli_query($con, "SELECT * FROM work_position"));
?>

<div class="row mb-3 pb-3">
    <div class="col-sm-6 mb-3">
        <ul class="list-group">
            <li class="list-group-item text-danger">
                <i class="oi oi-person display-3"></i>
                <span class="display-3 float-right">
                    <?= $employees_num?>
                </span>
            </li>
            <li class="list-group-item bg-danger">
                <a href="?page=employees" class="nav-link text-white">Employees Data</a>
            </li>
        </ul>
    </div>

    <div class="col-sm-6 mb-3">
        <ul class="list-group">
            <li class="list-group-item text-success">
                <i class="oi oi-sort-descending display-3"></i>
                <span class="display-3 float-right">
                    <?= $workposition_num?>
                </span>
            </li>
            <li class="list-group-item bg-success">
                <a href="?page=workposition" class="nav-link text-white">Position Data</a>
            </li>
        </ul>
    </div>

</div>