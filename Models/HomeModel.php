<?php

class HomeModel{
    public $db;

    public function check_user_login($useremail, $password){
        // $query = "SELECT count(*) FROM mebmer WHERE email=:useremail AND password = :password";
        $query = "SELECT id FROM manager WHERE email='{$useremail}' AND password='{$password}'";

        $stmt = $this->db->query($query);
        // $this->db->bind(":useremail", $useremail);
        // $this->db->bind(":password", $password);

        print_r($stmt);
        exit;
        // echo "登入成功";
        // echo $query;
        // echo $stmt;
        // exit;

        return $stmt;
    }
    
    public function check_admin_login($useremail, $password){
        $query = "SELECT count(*) FROM manager WHERE email='{$useremail}' AND password='{$password}'";

        $stmt = $this->db->prepare($query)->execute();
        return $stmt;
    }

    public function UserRegister($name, $email, $password){

        
        $check="SELECT * FROM member WHERE email='".$email."'";
        $stmt = $this->db->query($check);
        echo $stmt->rowCount();
        if($stmt->rowCount()==0){
            $query = "INSERT INTO member(name,email,password) VALUES('".$name."','".$email."','".$password."')";
            echo "test is good";
            $stmt = $this->db->query($query);
        }else{
            echo "該帳號已有人使用!<br>3秒後將自動跳轉頁面.....<br>";
            echo "<a href='signup.html'>未成功跳轉頁面請點擊此</a>";
            // header('HTTP/1.0 302 Found');
            header("refresh:3;url=../Views/register.php",true);
            exit;
        }        

        return 1;
    }

    
    

};

?>