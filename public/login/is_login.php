<?php
if(isset($_POST['login'])){
include_once '../includes/request_check.php';
//$email = "";
//performing validation to prevent extra spaces and html characters
        $email = filter_string($_POST['email']);
        $password = filter_string($_POST['password']);
        $error  =  [];
    if (strlen($password) < 8)
    {
        $error['password'] = "Incorrect password";
    }
    if (empty($password) || $password == '')
    {
        $error['password'] = "please enter password";

        // Conform password field validation
    }
    //email validation
    if (empty($email) || $email == " ")
    {
        $error['email'] = "please enter email";
    }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $error['email'] = "invalid email";
    }
    if(!isset($error['email']) && !isset($error['password'])) {
        require_once PRIVATE_PATH . '/db_config.php';
        $password = sha1($password);
        $query = "SELECT email , password ,first_name ,last_name ,role_id FROM users WHERE  email = ? AND password = ? limit 1";
// preparing query
        $stmt = $connection->prepare($query);
        $stmt->bind_param('ss', $email, $password);
//        $stmt->bind_result($email, $password , $first_name, $last);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows <= 0) {
            $error['incorrect'] = "Email or password is incorrect";
        }
        while ($row = $result->fetch_assoc()) {
            session_start();
            if($row['role_id'] === 2){

                $_SESSION['admin'] = true;
            }
            $_SESSION['email'] = $row['email'];
            $_SESSION['username'] = $row['first_name'] ." ".$row['last_name'];
            $_SESSION['is_login'] = true;
            header("Location:../");
        }

        }
}