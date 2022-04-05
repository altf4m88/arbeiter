<?php
    if(!defined('INDEX')){   
        die("");
    };

    $query = mysqli_query($con, "DELETE FROM work_position WHERE workposition_id = '$_GET[id]'");

    if($query){
        echo "Data deleted";
        echo "<meta http-equiv='refresh' content='1;url=?page=workposition'>";
    } else{
        echo "Data can't be saved <br>";
        echo mysqli_error($query);
    }
?>