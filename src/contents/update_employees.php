<?php
    if(!defined('INDEX')) {
        die("");
    }

    include "./src/lib/config.php";

    $profilepict = $_FILES['pict'] ['name'];
    $location = $_FILES['pict'] ['tmp_name'];
    $filetype = $_FILES['pict'] ['type'];
    $filesize = $_FILES['pict'] ['size'];
    $err = "";

    if($profilepict == ""){
        $query = mysqli_query($con, "UPDATE employees SET
        employee_name = '$_POST[name]',
        gender = '$_POST[gender]',
        dob = '$_POST[dob]',
        workposition_id = '$_POST[workposition]',
        info = '$_POST[info]'
        WHERE employee_id = '$_POST[id]'");
    } else {
        if($filetype != "image/jpeg" and $filetype != "image/jpg" and $filetype != "image/png"){
            $err = "The type of the File is not supported";
        }
        elseif ($filesize >= 1000000){
            echo $filesize;
            $err = "The size of the file is too large";
        }
        else {
            $query = mysqli_query($conn, "SELECT * FROM employees WHERE employee_id = '$_POST[id]'");
            $data = mysqli_fetch_array($query);
            if(file_exists("images/$data[pict]")){
                unlink("images/$data[pict]");
            }

            move_uploaded_file($location, "images/".$profilepict);
            $query = mysqli_query($conn, "UPDATE employees SET
            pict = '$profilepict',
            employee_name = '$_POST[name]',
            gender = '$_POST[gender]',
            dob = '$_POST[dob]',
            workposition_id = '$_POST[workposition]',
            info = '$_POST[info]'
            WHERE employee_id = '$_POST[id]'");
        }
    }

    if($err !=""){
        echo $err;
        echo "<meta http-equiv='refresh' content = '2; url=?page=add_workers";
    }
    elseif($query){
        echo "The data has been saved";
        echo "<meta http-equiv='refresh' content = '1; url=?page=employees'>";
    }
    else {
        echo "We cant process your data comrade";
        echo "mysqli_error()";
    }
?>