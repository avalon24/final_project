<?php
require('../model/database.php');
require('../model/db_function.php');
require('../model/todo_function.php');

    $action=filter_input(INPUT_POST,'action');
echo "action = $action"; echo $_COOKIE['fname']; echo $_COOKIE['lname']; echo $_COOKIE['phone']; echo $_COOKIE['dob']; echo $_COOKIE['gender']; 

    if($action == "upd_profile") {
        include ('upd_profile.php');
    } else if($action == "pwd_change") {
        include ('pwd_change.php');
    } else if($action == "pending_items") {
        $status="P";
	$result=getTodoItems($_COOKIE['user_id'],$status);
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
    } else if($action == "change_pwd") {
        $userid=$_COOKIE['user_id'];
        $password=filter_input(INPUT_POST,'password');
        $passtemp=filter_input(INPUT_POST,'pass_temp');
        $reseta=filter_input(INPUT_POST,'reseta');
        if($password === $passtemp) {
            if($password != NULL) {
                $result=updPassword($userid,$password,$reseta);
	        if($result == true) {
	            $success=", password changed successfully!";
		    include ('home.php');
		} else {
		    $message="Failed to update password!";
		    include ('change_pwd.php');
		}
	    } else {
	        $message="Password cannot be blank!";
		include ('change_pwd.php');
	    }
	} else {
	    $message="Passwords do not match! Reenter please!";
	    include ('change_pwd.php');
	}
    } else if($action == "updProfile") {
        echo "now where";
	$new_fname=filter_input(INPUT_POST,'f_name');
	$new_lname=filter_input(INPUT_POST,'l_name');
	$new_phone=filter_input(INPUT_POST,'contact');
	$new_dob=filter_input(INPUT_POST,'dob');
	$new_gender=filter_input(INPUT_POST,'gender');
	echo "fname=$new_name lname=$new_lname $phone=$new_phone";
        if($new_fname==NULL && $new_lname==NULL && $new_phone==NULL && $new_dob==NULL && $new_gender==NULL) {
            $message="It did not work";
            header ("Location: home.php");
        } else {
	    if($new_fname == NULL) {
	        $new_fname=$_COOKIE['fname'];
	    }
	    if($new_lname == NULL) {
	        $new_lname=$_COOKIE['lname'];
	    }
	    if($new_phone == NULL) {
                $new_phone=$_COOKIE['phone'];
            }
            if($new_dob == NULL) {
                $new_dob=$_COOKIE['dob'];
            }
	    if($new_gender == NULL) {
                $new_gender=$_COOKIE['gender'];
            }
	    updProfile($new_fname,$new_lname,$new_phone,$new_dob,$new_gender);
	    header ("Location: home.php");
	} 
    } else if($action == "cancel_upd_prof") {
        include ('home.php');
    }
?>
