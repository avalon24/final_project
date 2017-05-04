<?php
require('../final_project/model/database.php');
require('../final_project/model/db_function.php');

    $action=filter_input(INSERT_POST,"action");
    if($action == NULL) {
        $action = "view_login";
	echo "1st case";
    }
    if($action == "view_login") {
        include ('login.php');
	echo "2nd case";
    } else if($action == "new_user") {
        echo "3rd case";
        $fname=filter_input(INPUT_POST,'f_name');
        $lname=filter_input(INPUT_POST,'l_name');
        $phone=filter_input(INPUT_POST,'contact');
        $dob=filter_input(INPUT_POST,'dob');
	echo "dob = " | $dob;
        $gender=filter_input(INPUT_POST,'gender');
        $uname=filter_input(INPUT_POST,'email');
        $password=filter_input(INPUT_POST,'password');
        $passtemp=filter_input(INPUT_POST,'pass_temp');
        $resetq=filter_input(INPUT_POST,'reset_ques');
	$reseta=filter_input(INPUT_POST,'reset_ans');
	if($password === $passtemp) {
	    echo "3rd case_a";
	    if(isset($fname) && isset($lname) && isset($dob) && isset($uname) && isset($password) && isset($resetq) && isset($reseta)) {
	        echo "3rd case_a1";
	        $result=userCreate($fname,$lname,$phone,$dob,$gender,$uname,$password,$resetq,$reseta);
		if($result == false) {
		    include ('login.php');
		    echo "3rd case_a1i";
		}
	    } else {
	        echo "All fields must be populated!!";
/*	 	header("Location: .");*/
	    }
	} else {
	    echo "Passwords do not match!!";
/*	    header("Location: .");*/
	}
    } else if($action == "user_login") {
        $uname=filter_input(INPUT_POST,'user_name');
        $password=filter_input(INPUT_POST,'user_pwd');
        $result=isUserValid($uname,$password);
        if($result == true) {
            header ("Location: ./todo/home.php");
        } else {
            header ("Location: ./error/error.php");
        }
    }
?>