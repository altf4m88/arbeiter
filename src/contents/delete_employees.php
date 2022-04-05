<?php 

    if(!defined("INDEX")) {
        die("");
    }

    if(file_exists("images/$_GET[pict]")) {
        unlink ("images/$_GET[pict]");
    }
    include "./src/lib/config.php";
    $query = mysqli_query($con, "DELETE FROM employees WHERE employee_id = '$_GET[id]'");

    if($query) {
        echo "The data has been deleted";
        echo "<meta http-equiv='refresh' content = '1; url=?page=employees'>";
    }
    else {
        echo "Can't delete the data";
        echo "mysqli_error()";
    }


?>