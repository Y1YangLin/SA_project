<?php

class LoginController extends LoginModel{

    private $email;
    private $pwd;
    // private $repwd;

    public function __construct($email, $pwd){
        $this->email = $email;
        $this->pwd = $pwd;
    }

    public function loginUser(){
        
        
        if($this->emptyInput() == false){
            header('Location: ../index.php?error=EmptyInput');
            exit;
        }

        if($this->EmailInvalid() == false){
            header('Location: ../index.php?error=WrongEmail');
            exit;
        }
        // login model methods here

        if($this->checkUser($this->email) == false){
            header('Location : ../index.php?error=user_not_signup');
            exit;
        }

        if($this->verify_Pwd($this->email, $this->pwd) == false){
            header('Location : ../index.php?error=incorrect_pwd');
            exit;
        }

        echo "login success !";
        return true;

    }

    private function EmailInvalid(){
        $result = NULL;

        if(filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $result = true;
        }else{
            $result = false;
        }
        return $result;
    }

    
    private function emptyInput(){
        
        $result = NULL;

        if(empty($this->pwd) || empty($this->email)){
            $this->result = false;
        }else{
            $this->result = true;
        }
        return $result;
    }

};

?>