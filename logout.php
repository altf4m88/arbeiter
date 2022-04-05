<?php

    session_start();
    session_destroy();
    echo "<p> Logged Out</p>";
    echo "<meta http-equiv='refresh' content'2;url=login.php'>";

?>