<?php
    if(!defined('INDEX')){   
        die("");
    };

    $query = mysqli_query($con, "INSERT INTO work_position SET workposition_name = '$_POST[name]'");

    if($query){
        echo "Data saved";
        echo "<meta http-equiv='refresh' content='1;url=?page=workposition'>";
    } else {
        echo "Data cannot be saved";
        echo mysqli_error();
    }

?>