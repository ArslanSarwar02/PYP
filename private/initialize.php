<?php
//
//        if (!isset($is_access_init)){
//            header("location:../public/");
//        }
        // constants
        define('PRIVATE_PATH', dirname(__FILE__));
        define('PROJECT_PATH',dirname(PRIVATE_PATH));
        define("PUBLIC_PATH", PROJECT_PATH.'\public');

        // end constants
        //setting up path for public directory
        $public_string  = strpos($_SERVER['SCRIPT_NAME'],'/public')+7;
        $root           = substr($_SERVER['SCRIPT_NAME'],0,$public_string);
        define('WWW',$root);

        //setting up directory path for using node modules
        $node_string  = strpos($_SERVER['SCRIPT_NAME'],'/pickyourpart')+13;
        $node_root    = substr($_SERVER['SCRIPT_NAME'],0,$node_string);
        define('NODE_PATH',$node_root.'/node_modules');

        //setting up directory path for admin directory
        $admin_path     = strpos($_SERVER['SCRIPT_NAME'],'/pickyourpart')+13;
        $admin_sub_root = substr($_SERVER['SCRIPT_NAME'],0,$admin_path);
        define('ADMIN_ROOT',$admin_sub_root.'/admin');

//including function
 require_once 'functions.php';

