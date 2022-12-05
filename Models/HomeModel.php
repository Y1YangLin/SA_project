<?php

class HomeModel{
    public $db;

    public function check_user_login($username, $useremail, $password){
        $query = "SELECT count(*) FROM test(Member) WHERE (name=$username OR email=$useremail)AND password=$password ";

        $stmt = $this->db->prepare($query)->execute();
        return $stmt;
    }
    
    public function register($username, $useremail, $userpass){

    }

};

?>