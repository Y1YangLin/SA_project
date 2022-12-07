<?php
session_start();


include_once("config.php");
include_once("connection.php");

spl_autoload_register(function($class){
    if(file_exists("./Controllers/".$class.".php")){
        require "./Controllers/".$class.".php";
    }

    if(file_exists("./Models/".$class.".php")){
        require "./Models/".$class.".php";
    }

});

$db = Connection::connect($config);

$load_new = new HomeController();
$model = new HomeModel();
$load_new->model = $model;
$model->db = $db;

$login_status = $load_new->is_login();

// if($login_status){
//     return header("Location: ../Views/dashboard.php");
// }

$index = $load_new->indexAction();




?>