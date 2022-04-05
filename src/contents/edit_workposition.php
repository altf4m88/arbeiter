<?php
    if(!defined('INDEX')){   
        die("");
    };

    $query = mysqli_query($con, "SELECT * FROM work_position WHERE workposition_id = '$_GET[id]'");
    $data = mysqli_fetch_array($query);
?>

<h2>Edit Work Position</h2>
<form action="?page=update_workposition" method="post">
    <input type="hidden" name="id" value="<?= $data['workposition_id']?>">

    <div class="form-group">
        <label for="name">Name</label>
        <div class="input">
            <input type="text" name="name" id="name" value="<?= $data['workposition_name']?>">
        </div>
    </div>

    <div class="form-group">
        <input type="submit" value="Update" class="btn btn-primary">
        <input type="reset" value="Cancel" class="btn btn-warning">
    </div>
</form>