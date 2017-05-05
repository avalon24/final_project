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
	    addTodoItems($_COOKIE['user_id'],$date,$time,$desc,$stat);
	    $result=getTodoItems($_COOKIE['user_id'],$stat);
            include ('pending_items.php');
	} else {
	    $message="Please enter all values";
	    include ('add_items.php');
	}
    } else if($action == "update_item") {
        $itemid=filter_input(INPUT_POST,'item_id');
	$old_date=filter_input(INPUT_POST,'old_date');
	$old_time=filter_input(INPUT_POST,'old_time');
	$new_date=filter_input(INPUT_POST,'new_date');
	$new_time=filter_input(INPUT_POST,'new_time');
	if($new_date == NULL) {
            $new_date=$old_date;
	}
	if($new_time == NULL) {
	    $new_time=$old_time;
	}
	updTodoItems($itemid,$new_date,$new_time);
	$result=getTodoItems($_COOKIE['user_id'],"P");
	include ('pending_items.php');
    } else if($action == "cancel_upd") {
        $result=getTodoItems($_COOKIE['user_id'],"P");
        include ('pending_items.php');
    } else if($action == "delete_item") {
        $itemid=filter_input(INPUT_POST,'item_id');
	$stat=filter_input(INPUT_POST,'pg_val');
	echo "item id = $itemid";
	delTodoItems($itemid);
	$result=getTodoItems($_COOKIE['user_id'],$stat);
	if($stat == "P") {
	    include ('pending_items.php');
	} else {
	    include ('finished_items.php');
	}
    } else if($action == "finish_item") {
        $itemid=filter_input(INPUT_POST,'item_id');
	finTodoItems($itemid);
        $result=getTodoItems($_COOKIE['user_id'],"P");
        include ('pending_items.php');
    }

?>
