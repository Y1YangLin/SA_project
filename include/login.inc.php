<?php

if(isset($_POST['submit'])){
    
    $email = $_POST['email'];
    $upwd = $_POST['pwd'];

}

include "../dbh.php";
include "../class/Model/LoginModel.php";
include "../class/Controller/LoginController.php";

$login = new LoginController($email, $upwd);




if($login->loginUser()){
    header('Location: ../class/dashboard.php');
}else{
    echo "login failed";
}



?>