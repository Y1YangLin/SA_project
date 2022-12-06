<?php

class HomeModel{
    public $db;

    public function check_user_login($username, $useremail, $password){
        $query = "SELECT count(*) FROM member WHERE email='{$useremail}' AND password='{$password}' ";

        $stmt = $this->db->prepare($query)->execute();
        print_r($stmt);
        echo "test is good";
        exit;
        return $stmt;
    }
    
    public function UserRegister($name, $email, $password){

        $query = "INSERT INTO member(name,email,password) VALUES('".$name."','".$email."','".$password."')";
        echo "test is good";
        $stmt = $this->db->query($query);
        

        return 1;
    }

};

?>