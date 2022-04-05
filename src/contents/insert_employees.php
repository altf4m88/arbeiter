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
        $quer = mysqli_query($con, "INSERT INTO employees SET
        employee_name = '$_POST[name]',
        gender = '$_POST[gender]',
        dob = '$_POST[dob]',
        workposition_id = '$_POST[workposition]',
        info = '$_POST[additionalinformation]'");
    } else {
        if($filetype != "image/jpeg" and $filetype != "image/jpg" and $filetype != "image/png"){
            $err = "The type of the File is not supported";
        }
        elseif ($filesize >= 1000000){
            echo $filesize;
            $err = "The size of the file is too large";
        }
        else {
            move_uploaded_file($location, "./src/images/".$profilepict);
            $quer = mysqli_query($con, "INSERT INTO employees SET
            pict = '$profilepict',
            employee_name = '$_POST[name]',
            gender = '$_POST[gender]',
            dob = '$_POST[dob]',
            workposition_id = '$_POST[workposition]',
            info = '$_POST[info]'");
        }
    }

    if($err !=""){
        echo $err;
        echo "<meta http-equiv='refresh' content = '2; url=?page=add_employees";
    }
    elseif($quer){
        echo "The data has been saved";
        echo "<meta http-equiv='refresh' content = '1; url=?page=employees'>";
    }
    else {
        echo "Can't proccess the data";
        echo "mysqli_error()";
    }
?>