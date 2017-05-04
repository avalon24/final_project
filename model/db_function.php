<?php

function userCreate($fname,$lname,$phone,$dob,$gender,$uname,$password,$resetq,$reseta) {
    global $db;
    $query = 'INSERT INTO fp_users(u_fname,u_lname,u_phone,u_dob,u_gender,u_email,u_password,u_secretq,u_secreta) 
                   VALUES (:fname,:lname,:phone,:dob,:gender,:uname,:password,:resetq,:reseta)';
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

    if($count == 1) {
        return false;
    } else {
        return true;
    }
}

?>
