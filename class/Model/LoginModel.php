<?php
class LoginModel extends mysql{

    protected function getUser($email, $pwd){
        $stmt = $this->connect()->prepare('SELECT * FROM member WHERE email = ? ;');

        if(!$stmt->execute(array($email))){
            $stmt = NULL;
            header('Location: ../index.php?error=stmtfailed');
            exit();
        }

        // print_r($stmt->execute(array($email)));
        // echo $stmt->rowCount();
        
        if($stmt->rowCount() == 0){
            $stmt = NULL;
            header('Location: ../index.php?error=usernotfound');
            exit();
        }
        
        

        $hashed_pwd = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $pwdcheck = password_verify($pwd, $hashed_pwd[0]['password']);

        

        if(!$pwdcheck){
            $stmt = NULL;
            // header('Location: ../class/Login.php?error=incorrectpwd');
            echo "<b>密碼輸入錯囉!<br>3秒後將自動跳轉頁面.....<br></b>";
            echo "<a href='../class/Login.php'>未成功跳轉頁面請點擊此</a>";
    
            header("refresh:3;url=../class/Login.php",true);
            exit();
        }else{
            $stmt = $this->connect()->prepare('SELECT * FROM member WHERE email = ? AND password = ?;');
        
            

            if(!$stmt->execute(array($email, $hashed_pwd[0]['password']))){
                $stmt = NULL;
                header('Location: ../index.php?error=stmtfailed');
                exit();
            }
            
            
            if($stmt->rowCount() == 0){
                $stmt = NULL;
                header('Location: ../index.php?error=usernotfound');
                exit;
            }
            
           
            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            session_start();

            $_SESSION['user_email'] = $user[0]['email'];
            $_SESSION['user_name'] = $user[0]['name'];
            
            // print_r($_SESSION['user_name']);
            // exit();

            $stmt = NULL;
            
        }

        

    }


    

};

?>