<?php

function userCreate($fname,$lname,$phone,$dob,$gender,$uname,$password,$resetq,$reseta) {
    global $db;
    echo "inside DB Function";
    $query = 'insert into fp_users(u_fname,u_lname,u_phone,u_dob,u_gender,u_email,u_password,u_secretq,u_secreta) 
                   values (:fname,:lname,:phone,:dob,:gender,:uname,:password,:resetq,:reseta)';
    $statement=$db->prepare($query);
    $statement->bindValue(':fname',$fname);
    $statement->bindValue(':lname',$lname);
    $statement->bindValue(':phone',$phone);
    $statement->bindValue(':dob',$dob);
    $statement->bindValue(':gender',$gender);
    $statement->bindValue(':uname',$uname);
    $statement->bindValue(':password',$password);
    $statement->bindValue(':resetq',$resetq);
    $statement->bindValue(':reseta',$reseta);
    $count=$statement->execute();
    $statement->closeCursor();
    echo "updated = $count";
    if($count == 1) {
        return false;
    } else {
        return true;
    }
}

function isUserValid($uname,$password) {
    global $db;
    echo "uname = $uname # pwd = $password";
    $query = 'select * from fp_users
              where u_email = :uname';
    $statement=$db->prepare($query);
    $statement->bindValue(':uname',$uname);
    $statement->execute();
    $result=$statement->fetchAll();
    $statement->closeCursor();
    
    $count=$statement->rowCount();
    echo "count = $count";
    if($count == 1) {
        $user = $result[0]['u_fname'] + " " + $result[0]['u_lname'];
        setcookie('login',$user);
	setcookie('user_id',$result[0]['u_id']);
        return $result;
    } else {
        return false;
    }
}

?>
