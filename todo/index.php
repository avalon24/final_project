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
        echo "current value of uid = "; echo $_COOKIE['user_id']; echo "###";
        $status="P";
	$result=getTodoItems($_COOKIE['user_id'],$status);
	echo $result[0]['t_date'];
	include ('pending_items.php');
    } else if($action == "finished_items") {
        $status="C";
	$result=getTodoItems($_COOKIE['user_id'],$status);
	include ('finished_items.php');
    } else if($action == "add_items") {
        $date=filter_input(INPUT_POST,'due_dt');
	$time=filter_input(INPUT_POST,'due_tm');
	$desc=filter_input(INPUT_POST,'item_desc');
	$stat="P";
	if($date != NULL && $time!= NULL && $desc != NULL) {
	    addTodoItems($_COOKIE['login'],$date,$time,$desc,$stat);
	    header ("Location: ./pending_items.php");
	} else {
	    $message="Please enter all values";
	    include ('add_items.php');
	}
    }

?>
