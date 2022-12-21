<?php
// include "./newOOOP/dbh.php";

class ProductModel extends mysql{
   
    public function __construct(){
       
    }    


    public function getAllProduct(){
        $comments=array();
        header('Content-Type: application/json; charset=utf-8');

        $stmt = $this->connect()->prepare("SELECT * FROM member");
        $stmt->execute();



        foreach($stmt->fetchAll(PDO::FETCH_ASSOC) as $key => $row) {//fetch_assoc()
            array_push($comments, array(
            "id" => $row['ID_user'],//$row['Member_id'],************
            "username" => $row['name'],//$row['Member_name'],**********
            "birthday" => $row['brd'],//$row['Member_birthday'],*************
            ));
        }
        
        //$json = array("comments" => $comments);
        $response = json_encode($comments);
    
        echo $response;//一定要
        return $response;
    }

    public function getProductInfo(int $id){
        $comments=array();
        header('Content-Type: application/json; charset=utf-8');

        $stmt = $this->connect()->prepare("CALL sp_GetProductInfo($id)");
        $stmt->execute();

    
        foreach($stmt->fetchAll(PDO::FETCH_ASSOC) as $key => $row) {//fetch_assoc()
            array_push($comments, array(
                "Product_name" => $row['Product_name'],//$row['Member_id'],
                "Product_intro" => $row['Product_intro'],//$row['Member_name'],
                "Product_price" => $row['Product_price'],//$row['Member_birthday'],
                "Product_imglocation" => $row['Product_imglocation'],
                "ProductCategory_type" => $row['ProductCategory_type'],
                "likeamount" => $row['likeamount'],
                ));
        }
        
        $response = json_encode($comments);
        
        echo $response;
        return $response;
    }

    public function ViewProductContent(int $id){
        $comments=array();
        header('Content-Type: application/json; charset=utf-8');

        $stmt = $this->connect()->prepare("CALL sp_ViewProductContent($id)");
        $stmt->execute();

    
        foreach($stmt->fetchAll(PDO::FETCH_ASSOC) as $key => $row) {//fetch_assoc()
            array_push($comments, array(
            "Product_name" => $row['Product_name'],//$row['Member_id'],
            "Product_intro" => $row['Product_intro'],//$row['Member_name'],
            "Product_price" => $row['Product_price'],//$row['Member_birthday'],
            "Product_imglocation" => $row['Product_imglocation'],
            ));
        }
        
        $response = json_encode($comments);
        
        echo $response;
        return $response;
    }
    public function getSameTypeProduct(int $productType){
        $comments=array();
        header('Content-Type: application/json; charset=utf-8');

        $stmt = $this->connect()->prepare("select Product_imglocation,Product_price,Product_name,Product_intro from Product where Product_ProductCategory_id = $productType;");
        $stmt->execute();

    
        foreach($stmt->fetchAll(PDO::FETCH_ASSOC) as $key => $row) {//fetch_assoc()
            array_push($comments, array(
            "Product_name" => $row['Product_name'],//$row['Member_id'],
            "Product_price" => $row['Product_price'],//$row['Member_birthday'],
            "Product_imglocation" => $row['Product_imglocation'],
            "Product_intro" => $row['Product_intro'],
            ));
        }
        
        $response = json_encode($comments);
    
        echo $response;
        return $response;
    }

    public function SearchProductByKeyword(string $keyword){
        $comments=array();
        header('Content-Type: application/json; charset=utf-8');
        $keyword=urldecode($keyword);

        $stmt = $this->connect()->prepare("CALL sp_SearchProductByKeyword('$keyword')");
        $stmt->execute();

        foreach($stmt->fetchAll(PDO::FETCH_ASSOC) as $key => $row) {//fetch_assoc()
            array_push($comments, array(
            "Product_name" => $row['Product_name'],//$row['Member_id'],
            "Product_imglocation" => $row['Product_imglocation'],
            "Product_price" => $row['Product_price'],
            ));
        }
        
        $response = json_encode($comments);
    
        echo $response;
        return $response;
    }
    
    public function getAllComment(int $productID){
        $comments=array();
        header('Content-Type: application/json; charset=utf-8');

        $stmt = $this->connect()->prepare("SELECT ProductComment_content,ProductComment_date FROM ProductComment WHERE ProductComment_Product_id =$produuctID");
        $stmt->execute();

    
        foreach($stmt->fetchAll(PDO::FETCH_ASSOC) as $key => $row) {//fetch_assoc()
            array_push($comments, array(
            "comment" => $row['ProductComment_content'],//$row['Member_id'],
            "comment_date" => $row['ProductComment_date'],
            ));
        }
        
        $response = json_encode($comments);
    
        echo $response;
        return $response;
    }

};




?>