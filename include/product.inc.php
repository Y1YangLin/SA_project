<?php
include "../dbh.php";
include "../../ProductModel.php";
include "../../ProductController.php";


$attr=explode("/",$_SERVER["REQUEST_URI"]);
if (isset($_GET['search-key'])){
    $param = $_GET['search-key'];
}else if( !is_null($attr[5]) ){
    $param = $attr[5];
}else{
    $param = 0;
}


$product=new ProductController($attr[4],$param);//數字隨網址變*********
$product->getData();





?>