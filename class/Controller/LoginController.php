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
            header('location: ../class/login.php?error=emptyInput');
            exit();
        }

        if($this->EmailInvalid() == false){
            header('location: ../class/login.php?error=invalidemail');
            exit();
        }

        

        $this->getUser($this->email, $this->pwd);

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
            $result = false;
        }else{
            $result = true;
        }

        // echo $this->pwd . " " .$this->email;
        // echo isset($this->email);
        // exit();
        return $result;
    }

};

?>