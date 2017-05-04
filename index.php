<?php
require('database.php');
require('db_function.php');

    $action=filter_input(INSERT_POST,"action");
    if($action == NULL) {
        $action = "view_login";
    }
    if($action == "view_login") {
        include ('login.php');
    }

?>
