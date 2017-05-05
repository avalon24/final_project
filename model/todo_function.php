<?php

function getPendingItems($user_id) {
    global $db;
    $query='select * from fp_todo_list
            where t_u_id = :user_id and
	          t_status = "P"';
    $statement=$db->prepare($query);
    $statement->bindValue(':user_id',$user_id);
    $statement->execute();
    $result=$statement->fetchAll();
    $statement->closeCursor();
    return $result;
}

?>
