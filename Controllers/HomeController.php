<?php

// session_start();

class HomeController{
    public $model;

    public function indexAction(){

    
        if(isset($_GET["logout"])){
            unset($_SESSION["userLogin"]);
            unset($_SESSION["adminLogin"]);
            // return require_once("./index.php");
        }

        if(isset($_POST["LoginSubmit"])){

            // $username = $_POST["name"];
            $useremail = $_POST["email"];
            $password = $_POST["password"];

            $checkUserLogin = $this->model->check_user_login($useremail,password_hash($password,PASSWORD_DEFAULT));
            $checkAdminLogin = $this->model->check_admin_login($useremail,password_hash($password,PASSWORD_DEFAULT));
            
            if(isset($checkUserLogin)){    
                $_SESSION["userLogin"] = 1;
                
            }else if(isset($checkAdminLogin)){
                $_SESSION["adminLogin"] = 1;
                
            }
            // echo "test";
            // echo $checkUserLogin . "" . $checkAdminLogin;
            // exit;

        }
        if(isset($_POST["RegisterSubmit"])){

            $username = $_POST["name"];
            $useremail = $_POST["email"];
            $password = $_POST["password"];
            

            

            $this->model->UserRegister($username, $useremail,password_hash($password, PASSWORD_DEFAULT), $username);
            $_SESSION["userLogin"] = 1;
        }


        $this->routeManager();
        
    }

    public function routeManager(){

        if(isset($_SESSION["userLogin"])){
            return header("Location: ../Views/dashboard.php");
        }

        if(isset($_SESSION["adminLogin"])){
            // echo "admin test";
            return header("Location: ../Views/admin_dashboard.php");
        }

        if(isset($_GET["register"])){
            return header("Location: ../Views/register.php");
        }

        if(isset($_GET["login"])){
            return header("Location: ../Views/login.php");
        }

        if(isset($_GET["logout"])){
            return header("Location: ../index.php");
        }

        

        return header("Locatoin: ../index.php");
    }

    public function is_login(){ //有bug
        if(isset($_SESSION["userLogin"])){
            return 1;
        }
    }

};

?>