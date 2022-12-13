<?php

class LoginModel extends mysql{

    public function checkUser($email){
        $stmt = $this->connect()->prepare('SELECT * FROM member WHERE email = ? ;');

        if(!$stmt->execute(array($email))){
            $stmt = NULL;
            header('Location: ../index.php?error=stmtfailed');
            exit();
        }

        $resultcheck = NULL;
        if($stmt->rowCount()){
            $resultcheck = true;    //找到email
        }else{  
            $resultcheck = false;   
        }   

        return $resultcheck;

    }


    public function verify_Pwd($email, $pwd){
        $stmt = $this->connect()->prepare('SELECT password FROM member WHERE email = ? ;');
        $hashed_pwd = $stmt->execute(array($email));

        echo $hashed_pwd;
        exit();

        $verify_result = NULL;

        if(password_verify($pwd, $hashed_pwd)){
            $verify_result = true;
        }else{
            $verify_result = false;
        }
        return $verify_result;
    }

};

?>