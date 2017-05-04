<?php
/*require('database.php');*/
/*require('db_function.php');*/

    $action=filter_input(INSERT_POST,"action");
    if($action == NULL) {
        $action = "view_login";
    }
    if($action == "view_login") {
        include ('login.php');
    } else if($action == "new_user") {
        $fname=filter_input(INPUT_POST,'f_name');
        $lname=filter_input(INPUT_POST,'l_name');
        $phone=filter_input(INPUT_POST,'contact');
        $dob=filter_input(INPUT_POST,'dob');
        $gender=filter_input(INPUT_POST,'gender');
        $uname=filter_input(INPUT_POST,'email');
        $password=filter_input(INPUT_POST,'password');
        $passtemp=filter_input(INPUT_POST,'pass_temp');
        $resetq=filter_input(INPUT_POST,'reset_ques');
	$reseta=filter_input(INPUT_POST,'reset_ans');
	if($password === $passtemp) {
	    if(isset($fname) && isset($lname) && isset($dob) && isset($uname) && isset($password) && isset($resetq) && isset($reseta) {
	        $result=userCreate($fname,$lname,$phone,$dob,$gender,$uname,$password,$resetq,$reseta);
		if($result == false) {
		    include ('login.php');
		} 
	    } else {
	        $message="All fields must be populated!!";
		header("Location: .");
	    }
	} else {
	    $message="Passwords do not match!!"
	    header("Location: .");
	}
    }

?>
