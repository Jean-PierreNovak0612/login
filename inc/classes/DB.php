<?php

    // If there is no constant named __CONFIG__ do not load the configuration file
    if(!defined('__CONFIG__')){
        exit('you do not have a config file!!');
    }

    class DB {

        protected static $con;

        private function __construct(){

            try{
                // 'host = hostname; port = hostport;dbname = the_name_of_your_database, 'your_username_for_the_database', 'the_password_for_the_database'(All the data should be provided from the srvice provider) 
                self::$con = new PDO( 'mysql:charset=utf8mb4;host=THE-NAME-OF-YOUR-HOST;port=THE-PORT;dbname=NAME-OF-YOUR-DATABASE', 'DB-USERNAME', 'DB-PASSWORD');
                self::$con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
                self::$con->setAttribute( PDO::ATTR_PERSISTENT, false );
            } catch ( PDOException $e){
                echo 'Could not connect to database!';
                exit;
            }

        }

        public static function getConnection(){

            // If this instance has not been started, start it
            if(!self::$con){
                new DB();
            }

            // Return the writeable db connection
            return self::$con;
        }

    }

?>