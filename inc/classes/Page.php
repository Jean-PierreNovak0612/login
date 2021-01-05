<?php

    // If there is no constant named __CONFIG__ do not load the configuration file
    if(!defined('__CONFIG__')){
        exit('you do not have a config file!!');
    }

    class Page {
        // Force the user to login for content
        static function ForceLogin(){
            if(!isset($_SESSION['user_id'])){
                // The user is not allowed here
                header('Location: /login.php');
                exit;
            }
        }

        static function ForceDashboard(){
            if(isset($_SESSION['user_id'])){
                // The user is not allowed here, but redirect anyway
                header('Location: /dashboard.php');
                exit;
            }
        }
    }
?>