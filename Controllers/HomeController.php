<?php

class HomeController{
    public $model;

    public function indexAction(){

        if(isset($_POST["LoginSubmit"])){
            $username = $_POST["username"];
            $useremail = $_POST["useremail"];
            $password = $_POST["password"];

            $checkUserLogin = $this->model->check_user_login($username,$useremail,$password);
            
            if($checkUserLogin == 1){    
                $_SESSION["userLogin"] = 1;
            }

        }

        $this->routeManager();

    }

    public function routeManager(){

        if($_SESSION["userLogin"]){
            return require_once("./views/dashboard.php");
        }

        return require_once("./views/login.php");
    }

};

?>