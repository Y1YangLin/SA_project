<?php
session_start();

if(isset($_SESSION['user_name'])){
    header('location: ../class/dashboard.php?login=true');
    exit();
}

?>