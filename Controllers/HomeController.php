<?php
session_start();

class HomeController{
    public $model;

    public function add_salt($password, $salt){
        $hashed_password = "".$salt."".$password."";
        return $hashed_password;

    }

    public function indexAction(){

        if(isset($_GET["logout"])){
            unset($_SESSION["userLogin"]);
        }

        if(isset($_POST["LoginSubmit"])){
            $username = $_POST["username"];
            $useremail = $_POST["useremail"];
            $password = $_POST["password"];

            $checkUserLogin = $this->model->check_user_login($username,$useremail,$password);
            
            if($checkUserLogin == 1){    
                $_SESSION["userLogin"] = 1;
            }

        }
        if(isset($_POST["RegisterSubmit"])){
            $username = $_POST["username"];
            $password = $_POST["password"];
            $useremail = $_POST["email"];

            $this->model->UserRegister($username, $useremail, $this->add_salt($password, $username));
            $_SESSION["userLogin"] = 1;
        }
        $this->routeManager();

    }

    public function routeManager(){

        if(isset($_SESSION["userLogin"])){
            return require_once("./views/dashboard.php");
        }

        if(isset($_GET["register"])){
            return require_once("./views/register.php");
        }

        if(isset($_GET["login"]) || isset($_GET["logout"])){
            return require_once("./views/login.php");
        }

        return require_once("./views/login.php");
    }

};

?>