<?php
//session_start();
    $error = [];
    $fname =
    $lname =
    $email =
    $password =
    $confirmp = "";
    if(isset($_POST['register'])) {

        require_once '../includes/request_check.php';

        //setting up variables for coming request
        $error = [];
        $fname = filter_string($_POST['first_name']);
        $lname = filter_string($_POST['last_name']);
        $email = filter_string($_POST['email']);
        $password = filter_string($_POST['password']);
        $confirmp = filter_string($_POST['confirm_password']);

        // setting up patterns for matching
        $exp = "/[0-9]/";

        //validation for first name field
        if (empty($fname) || $fname == " ") {
            $error['fname'] = "please enter first name";
        }
        if (preg_match($exp, $fname)) {
            $error['fname'] = "invalid first name";
        }

        //last name field validations
        if (empty($lname) || $lname == " ") {
            $error['lname'] = "please enter last name";
        }
        if (preg_match($exp, $lname)) {
            $error['lname'] = "invalid last name";
        }
        // password check

        if (strlen($password) < 8) {
            $error['password'] = "password 8 characters long";
        }
        if (empty($password) || $password == '') {
            $error['password'] = "please enter password";

            // Conform password field validation
        }
        if (($confirmp) != ($password)) {
            $error['confirmp'] = "Confirm password must match with password";
        }
        if (empty($confirmp) || $confirmp == '') {
            $error['confirmp'] = "password is required";
        }

        //email validation
        if (empty($email) || $email == " ") {
            $error['email'] = "please enter email";
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error['email'] = "invalid email";
        }
        // creating your account id input is valid

        if (!isset($error['email']) && !isset($error['fname']) && !isset($error['lname']) && !isset($error['password']) && !isset($error['confirmp'])) {

//            try {

            // insery query

            require PRIVATE_PATH . '/db_config.php';

//            $connection = new mysqli('localhost', 'root', '', 'twps');

            $sql = "INSERT INTO user_requests(first_name,last_name,email,password,confirm_password) VALUES(?,?,?,?,?)";

            //prepare query
            $stmt = $connection->prepare($sql);
            $password = sha1($password);
            $confirmp = sha1($password);
            $stmt->bind_param('sssss', $fname, $lname, $email, $password, $confirmp);
            if ($stmt->execute()) {
                $stmt->close();
                // if account is creating session and redirect to th landing page
//                session_start();
//                $_SESSION['is_login'] = true;
//                $_SESSION['email'] = $email;
//                $_SESSION['username'] = $fname . " " . $lname;
//                // landing page redirect
                header("location: ../index.php?success=Your information has successfully been sent to administrator after approval you will be able to login");
            }
        }
    }
//
//            throw new Exception("unable to create your account");
//        }
//        catch (Exception $e)
//        {
//            echo "An error occurred" . $e->getMessage();
//        }

//    }