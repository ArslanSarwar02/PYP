<?php
include '../../private/initialize.php';
session_start();
session_unset();
//session_unset('username');
//session_unset('email');
session_destroy();
header("location:index.php");