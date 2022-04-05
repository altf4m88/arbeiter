<?php
    if(!defined('INDEX')) { die(""); }

    $pages = array("dashboard", "employees", "add_employees", "insert_employees", "edit_employees", "update_employees", "delete_employees", "workposition", "add_workposition", "insert_workposition", "edit_workposition", "update_workposition", "delete_workposition");

    if(isset($_GET['page'])) {
        $page = $_GET['page'];
    }else {
        $page = "dashboard";
    }

    foreach($pages as $p){
        if($page == $p){
            include "src/contents/$p.php";
            break;
        }
    }

?>