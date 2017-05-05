<?php

function getTodoItems($user_id,$status) {
    global $db;
    $query='select * from fp_todo_list
            where t_u_id = :user_id and
	          t_status = :status';
    $statement=$db->prepare($query);
    $statement->bindValue(':user_id',$user_id);
    $statement->bindValue(':status',$status);
    $statement->execute();
    $result=$statement->fetchAll();
    $statement->closeCursor();
    return $result;
}

?>
