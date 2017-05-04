<?php
require('../final_project/model/database.php');
require('../final_project/model/db_function.php');

    $action=filter_input(INPUT_POST,'action');
    echo "current value of action = $action ##";
    if($action == NULL) {
        $action=filter_input(INPUT_GET,'action');
        if($action == NULL) {
            $action = "view_login";
	    echo "1st case";
	}
    }
    if($action == 'view_login') {
        include ('login.php');
	echo "2nd case";
    } else if($action == 'user_login') {
        echo "4th case";
        $uname=filter_input(INPUT_POST,'user_name');
        $password=filter_input(INPUT_POST,'user_pwd');
        $result=isUserValid($uname,$password);
        if($result == true) {
	    echo " ## "; echo $result[0]['u_password'];
	    if($result[0]['u_password'] == $password) {
	        header ("Location: ./todo/home.php");
            } else {
	        $error = "Incorrect Password!!";
	        include ('./errors/error.php');
	    }
        } else {
	    $error = "User ID does not exist!!";
            include ('./errors/error.php');
	}
    } else if($action == 'new_user') {
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
	    if($fname != NULL && $lname != NULL && $dob != NULL && $uname != NULL && $password != NULL && $resetq != NULL && $reseta != NULL) {
	        echo "3rd case_a1";
	        $result=userCreate($fname,$lname,$phone,$dob,$gender,$uname,$password,$resetq,$reseta);
		if($result == false) {
		    include ('login.php');
		    echo "3rd case_a1i";
		} else {
		    $message="User email already exists! Create a new account or Try login!";
                    include ('register.php');
		}
	    } else {
	        $message="All mandatory fields must be populated!!";
                include ('register.php');
	    }
	} else {
	    $message="Passwords do not match!!";
	    include ('register.php');
	}
    }
?>
