<?php
require('../model/database.php');
require('../model/db_function.php');
require('../model/todo_function.php');

    $action=filter_input(INPUT_POST,'action');
    if($action == "upd_profile") {
        include ('upd_profile.php');
    } else if($action == "pwd_change") {
        include ('pwd_change.php');
    } else if($action == "pending_items") {
        $result=getPendingItems($_COOKIE['user_id']);
	include ('pending_items.php');
    } else if($action == "finished_items") {
        $result=getFinishedItems($_COOKIE['user_id']);
	include ('finished_items.php');
    }

?>
