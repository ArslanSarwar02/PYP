
<?php

    if(isset($_GET['id'])){
    require_once  '../../../private/initialize.php';
    $user_id = $_GET['id'];

//    including database configuration file
    require_once PRIVATE_PATH.'/db_config.php';

    //preparing delete query
    $delete_user = "DELETE FROM users where user_id=?";
    $delete= $connection->prepare($delete_user);
    $delete->bind_param('i', $user_id);

    // query execution
        if($delete->execute()){
            header('location:index.php?success=true');        }
}