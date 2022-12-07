<?php


include_once("config.php");
include_once("connection.php");



class ProductModel{
    public $db;
    //從種類抽、從名字抽
 
    public function VisitorBrowseProduct($product_id){
        $query = "SELECT * FROM product WHERE Product_id ='{$product_id}'";

        $stmt = $this->db->prepare($query)->execute();
        // $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->fetch(PDO::FETCH_ASSOC);


        foreach($stmt as $row){
            echo $row['Product_name']." ".$row['Product_intro']."<br>";
        }

        print_r($stmt);
        echo "<br>"."test is good";
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