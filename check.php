<?php
    session_start();
    include "src/lib/config.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($con, "SELECT * FROM user WHERE username='$username' AND password='$password'");
    $data = mysqli_fetch_array($query);
    $num = mysqli_num_rows($query);

    if($num > 0){
        $_SESSION['username'] = $data['username'];
        $_SESSION['password'] = $data['password'];
        
        header('location: index.php');
    } else {
        echo "<p>Failed to log in</p>";
        echo "<meta http-equiv='refresh' content='2;url=login.php'>";
    }

?>