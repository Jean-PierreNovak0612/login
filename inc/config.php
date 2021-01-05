<?php
    // If there is no constant named __CONFIG__ do not load the configuration file
    if(!defined('__CONFIG__')){
        exit('you do not have a config file!!');
    }

    // Sessions are alwayes turned on
    if(!isset($_SESSION)){
        session_start();
    }


    // If the costant __CONFIG__ is defined, this code will be executed
    // Allow errors
    error_reporting(-1);
    ini_set('display_errors', 'On');

    // Include the DB.php file:
    include_once "classes/DB.php";
    include_once "classes/Filter.php";
    include_once "classes/User.php";
    include_once "classes/Page.php";
    include_once "functions.php";

    $con = DB::getConnection();
?>