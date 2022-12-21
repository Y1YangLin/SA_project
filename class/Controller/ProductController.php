<?php
// include "./newOOOP/dbh.php";
// include "./ProductModel.php";
class ProductController extends ProductModel{
    
    // public function ProductController($string){
    //     $this->string=$string;
    // }
    public function __construct($string,$param){
        $this->string = $string;
        $this->param = $param;
    }
    // public function __construct(){
    //     $attr=explode("/",$_SERVER["REQUEST_URI"]);
    //     if($attr[2] == 'get' && $attr[3] == "all"){
    //         $product=new ProductModel();
    //         $product->getproduct();
                    
    //     }else if($attr[2] == 'get' && is_numeric($attr[3])){
    //         echo "gay";
    //     }
    // }

    public function getData(){

        if($this->string == "getall"){
            $this->getAllProduct();
        }else if($this->string == "getSameTypeProduct"){
            $this->getSameTypeProduct($this->param);
        }else if($this->string == "SearchProductByKeyword"){

            $this->SearchProductByKeyword($this->param);
        }   
    }
};

        



?>