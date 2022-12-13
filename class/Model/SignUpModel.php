<?php

class SignUpModel extends mysql{

    public function setUser($name, $email, $pwd){
        $stmt = $this->connect()->prepare("INSERT INTO member (name, email, password) VALUES(?, ?, ?)");
        
        $hashed_pwd = password_hash($pwd, PASSWORD_DEFAULT);

        if(!$stmt->execute(array($name, $email, $hashed_pwd))){
            $stmt = NULL;
            header('Location: ../index.php?error=stmtfailed');
            exit();
        }

        $stmt = NULL;
    }

    public function checkUser($email){
        $stmt = $this->connect()->prepare('SELECT * FROM member WHERE email = ? ;');
        
        if(!$stmt->execute(array($email))){
            $stmt = NULL;
            header('Location: ../index.php?error=stmtfailed');
            exit();
        }

        $resultCheck = NULL;
        if($stmt->rowCount()){
            $resultCheck = true;
        }else{
            $resultCheck = false;
        }
        
        return $resultCheck;
    }


};



?>