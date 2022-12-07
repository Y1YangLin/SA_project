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


// $admin_model = new AdminModel();


$index = $load_new->indexAction();




?>