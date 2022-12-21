<?php

    class mysql{
        // private $DB_address = 'localhost';
        // private $DB_Name = 'test';
        // private $DB_User = 'root';
        // private $DB_password = '';
        // private $db;
        // protected $stmt;

        // public $result, $obj_all, $result_data, $last_query;

        public function connect(){
            try{
                $DB_address = 'localhost';
                $DB_Name = 'testdb';//'test
                $DB_User = 'root';
                $DB_password = '';

                $pdo = new PDO("mysql:host=".$DB_address."; charset=utf8mb4; dbname=".$DB_Name."", $DB_User, $DB_password);
            
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); // enable prepare 會降低效能

                return $pdo;

            }catch(PDOException $e){
                print "Error ! : " . $e->getMessage() ."<br>" ;
                die();
            }
        }

        // public function __destruct(){
        //     $this->db = NULL;
        // }

        public function run_mysql_query($query){
            $this->last_query = $query;

            try{
                $this->stmt = $this->db->prepare($query);
                $this->result = $this->stmt->execute();
                
                if($this->result){
                    // echo "sql ok";
                    // exit;
                    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
                }else{
                    print_r($this->stmt->errorInfo());
                }

            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }

    };

    
?>