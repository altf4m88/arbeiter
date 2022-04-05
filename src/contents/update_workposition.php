<?php
    if(!defined('INDEX')){   
        die("");
    };

    $query = mysqli_query($con, "UPDATE work_position SET workposition_name = '$_POST[name]' WHERE workposition_id = '$_POST[id]'");

    if($query){
        echo "Data saved";
        echo "<meta http-equiv='refresh' content='1;url=?page=workposition'>";
    } else{
        echo "Data cannot be saved <br>";
        echo mysqli_error();
    }
?>