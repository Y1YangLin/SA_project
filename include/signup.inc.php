<?php

if(isset($_POST['submit'])){
    
    $email = $_POST['email'];
    $name = $_POST['name'];
    $pwd = $_POST['pwd'];
    $repwd = $_POST['repwd'];
    $addr = $_POST['address'];
    $phone = $_POST['phone'];

}

include "../dbh.php";
include "../class/Model/SignUpModel.php";
include "../class/Controller/SignUpController.php";



$signup = new SignUpController($name, $pwd, $repwd, $email, $phone, $addr);

$signup->signupUser(); 

header('Location: ../class/dashboard.php');

?>
