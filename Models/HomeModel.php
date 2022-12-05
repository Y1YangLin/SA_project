<?php

class HomeModel{
    public $db;

    public function check_user_login($username, $useremail, $password){
        $query = "SELECT count(*) FROM test(Member) WHERE (name=$username OR email=$useremail)AND password=$password ";

        $stmt = $this->db->prepare($query)->execute();
        print_r($stmt);
        exit;
        return $stmt;
    }
    
    public function UserRegister($name, $email, $password){

        $query = "INSERT INTO () VALUES()";

        $stmt = $this->db->query($query);

    }

};

?>