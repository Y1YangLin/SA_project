<?php

class HomeModel{
    public $db;

    public function check_user_login($useremail, $password){
        $query = "SELECT count(*) FROM member WHERE email='{$useremail}' AND password='{$password}' ";

        $stmt = $this->db->prepare($query)->execute();
        // print_r($stmt);
        echo "登入成功";

        echo $stmt;

        // exit;
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