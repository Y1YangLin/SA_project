<?php


include_once("config.php");
include_once("connection.php");



class ProductModel{
    public $db;

 
    public function VisitorBrowseProduct($product_id){
        $query = "SELECT * FROM product WHERE Product_id ='{$product_id}'";

        $stmt = $this->db->prepare($query)->execute();
        print_r($stmt);
        echo "test is good";
        exit;
        return $stmt;
    }
    public function VisitorSearchProduct(){
        


    }
    
   

};

$db = Connection::connect($config);

$model = new ProductModel();
$model->db = $db;

echo $model->VisitorBrowseProduct('1');

?>