<?php

class SignUpController extends SignUpModel{

    private $name;
    private $pwd;
    private $repwd;
    private $email;
    private $phone;
    private $addr;

    

    public function __construct($name, $pwd, $repwd, $email, $phone, $addr){
        $this->name = $name;
        $this->pwd = $pwd;
        $this->repwd = $repwd;
        $this->email = $email;
        $this->phone = $phone;
        $this->addr = $addr;

    }

    public function signupUser(){
        
        if($this->emptyInput() == false){
            header('Location: ../class/Login.php?error=emptyinput');
            exit();
        }
        
        if($this->PwdMatch() == false){
            
            header('Location: ../class/Login.php?error=incorrectPwd');
            exit();
        }
        
        if($this->NameInvalid() == false){
            header('Location: ../class/Login.php?error=NametypeError');
            exit();
        }
        
        if($this->EmailInvalid() == false){
            header('Location: ../class/Login.php?error=InvalidEmail');
            exit();
        }
        
        if($this->checkUser($this->email)){
            echo "<b>該帳號已有人使用!<br>3秒後將自動跳轉頁面.....<br></b>";
            echo "<a href='../class/Login.php'>未成功跳轉頁面請點擊此</a>";
    
            header("refresh:3;url=../class/Login.php",true);
            exit();
        }
        
        
        $this->setUser($this->name,$this->email,$this->pwd);

    }

    private function emptyInput(){
        
        $result = NULL;
        
        if(empty($this->name) || empty($this->pwd) || empty($this->repwd) || empty($this->email) || empty($this->phone) || empty($this->addr)){
            $result = false;
        }else{
            $result = true;
        }
        
        return $result;
    }

    private function PwdMatch(){
        $result = NULL;

        if(strcmp($this->pwd, $this->repwd) == 0){ //用函式
            $result = true;
        }else{
            $result = false;
        }

        return $result;
    }

    private function NameInvalid(){
        $result = NULL;
        if(preg_match("/\s/",$this->name)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
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

};

?>