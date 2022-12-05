<?php

class Connection{
    public static $connection = false;

    private function __construct(){
        
    }

    public static function connect($config){

        try{
            if(!self::$connection){
                $con = new PDO("mysql:host={$config["db_host"]}; dbname={$config["db_name"]}",
                $config["db_user"],$config["db_pass"]);
            
                $con->setAttribute(\PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $con->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
                self::$connection = $con;
                return self::$connection;

            }
        }catch(\PDOException $e){
            echo $e->getMessage();
            exit;
        }

    }

}

?>