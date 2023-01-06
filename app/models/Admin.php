<?php

    class Admin{

        public function __construct() {
            $this->db = new Database;


        }
    
        public function login($email, $password){

            $row = $this->db->single();

            $hashed_password = $row->Manager_password;

            // print_r($hashed_password);
            // print_r($password);
            // exit;
            
            if(password_verify($password, $hashed_password)){
                // echo 'login success !';
                // exit;
                return $row;
            }else{
                // echo 'Login failed !';
                // exit;
                return false;
            }            

        }

        public function findAdminByEmail($email){

            $this->db->query('SELECT * FROM manager WHERE manager_email = :email ');
            $this->db->bind(':email', $email);

            $row = $this->db->single();

            
            if($this->db->rowCount() > 0){
                return true;
            } else {
                return false;
            }
        }

        //add modify delete

        // Member
        public function addMember($data){
            $this->db->query('INSERT INTO member (Member_name, Member_password, Member_email, Member_faceType_id, Member_birthday) VALUES 
            (:username, :password, :email, :face_type, :date)');

            $this->db->bind(':username', $data['username']);
            $this->db->bind(':password', $data['password']);
            $this->db->bind(':face_type', $data['face_type']);
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':date', $data['date']);

            if($this->db->execute()){
                return true;
            }else{
                return false;
            }

        }

        public function modifyMember($data){
            $this->db->query('UPDATE member SET Member_name = :username, Member_email = :email, Member_faceType_id = :face_type, Member_birthday = :date 
            WHERE Member_id = :userid');

            $this->db->bind(':userid', $data['userid']);
            $this->db->bind(':username', $data['username']);
            
            $this->db->bind(':face_type', $data['face_type']);
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':date', $data['date']);

            if($this->db->execute()){
                return true;
            }else{
                return false;
            }


        }

        public function deleteMember($data){

            $this->db->query('DELETE FROM member WHERE Member_id = :userid');

            $this->db->bind(':userid', $data['userid']);
            
            // $this->db->bind(':email', $data['email']);
            

            if($this->db->execute()){
                return true;
            }else{
                return false;
            }
        }

        //Product

        public function addProduct($data){
            $this->db->query('INSERT INTO product (Product_ProductCategory_id, Product_FaceCategory_id ,Product_name, Product_intro, Product_price, Product_imglocation) VALUES 
            (:Category_id, :FaceCategory_id, :name, :intro, :price, :img)');

            $this->db->bind(':Category_id', $data['category_id']);
            $this->db->bind(':FaceCategory_id', $data['facecategory_id']);
            $this->db->bind(':name', $data['name']);
            $this->db->bind(':intro', $data['intro']);
            $this->db->bind(':price', $data['price']);
            $this->db->bind(':img', $data['img']);

            if($this->db->execute()){
                return true;
            }else{
                return false;
            }

        }

        public function modifyProduct($data){
            $this->db->query('UPDATE product SET Product_ProductCategory_id = :Category_id, Product_FaceCategory_id = :FaceCategory_id, Product_name = :name, Product_intro = :intro, Product_price = :price,

            Product_imglocation = :img WHERE Product_id = :id');

            $this->db->bind(':id', $data['id']);
            $this->db->bind(':Category_id', $data['category_id']);
            $this->db->bind(':FaceCategory_id', $data['facecategory_id']);
            $this->db->bind(':name', $data['name']);
            $this->db->bind(':intro', $data['intro']);
            $this->db->bind(':price', $data['price']);
            $this->db->bind(':img', $data['img']);

            if($this->db->execute()){
                return true;
            }else{
                return false;
            }


        }

        public function deleteProduct($data){

            $this->db->query('DELETE FROM product WHERE Product_id = :id');

            $this->db->bind(':id', $data['id']);
            
            
            

            if($this->db->execute()){
                return true;
            }else{
                return false;
            }
        }

        //Manager

        public function addManager($data){
            $this->db->query('INSERT INTO manager (Manager_name, Manager_password, Manager_email, Manager_birthday) VALUES 
            (:username, :password, :email, :date)');

            $this->db->bind(':username', $data['username']);
            $this->db->bind(':password', $data['password']);
            
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':date', $data['date']);

            if($this->db->execute()){
                return true;
            }else{
                return false;
            }

        }

        public function modifyManager($data){
            $this->db->query('UPDATE manager SET Manager_name = :username, Manager_email = :email, Manager_birthday = :date 
            WHERE Manager_id = :userid');

            $this->db->bind(':userid', $data['userid']);
            $this->db->bind(':username', $data['username']);
            
            
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':date', $data['date']);

            if($this->db->execute()){
                return true;
            }else{
                return false;
            }


        }

        public function deleteManager($data){

            $this->db->query('DELETE FROM manager WHERE Manager_id = :userid');

            $this->db->bind(':userid', $data['userid']);
            
            // $this->db->bind(':email', $data['email']);
            

            if($this->db->execute()){
                return true;
            }else{
                return false;
            }
        }

        //Comment

        public function addComment($data){
            $this->db->query('INSERT INTO productcomment (ProductComment_Member_id, ProductComment_Product_id, ProductComment_content, ProductComment_date) VALUES 
            (:member_id, :product_id, :contents, :date)');

            $this->db->bind(':member_id', $data['member_id']);
            $this->db->bind(':product_id', $data['product_id']);
            
            $this->db->bind(':contents', $data['content']);
            $this->db->bind(':date', $data['date']);

            if($this->db->execute()){
                return true;
            }else{
                return false;
            }

        }

        public function modifyComment($data){
            $this->db->query('UPDATE productcomment SET ProductComment_Member_id = :member_id, ProductComment_Product_id = :product_id, ProductComment_content = :contents,
            ProductComment_date = :date WHERE productcomment_id = :id');

            $this->db->bind(':id', $data['id']);
            $this->db->bind(':member_id', $data['member_id']);
            $this->db->bind(':product_id', $data['product_id']);
            
            $this->db->bind(':contents', $data['content']);
            $this->db->bind(':date', $data['date']);

            if($this->db->execute()){
                return true;
            }else{
                return false;
            }


        }

        public function deleteComment($data){

            $this->db->query('DELETE FROM productcomment WHERE productcomment_id = :id');

            $this->db->bind(':id', $data['id']);
            
            
            

            if($this->db->execute()){
                return true;
            }else{
                return false;
            }
        }

        //Questionnaire

        public function addQuestionnaire($data){
            $this->db->query('INSERT INTO qquestion (QQuestion_Questionnaire_id , QQuestion_Manager_id , QQuestion_content) VALUES 
            (:member_id, :manager_id, :content)');

            $this->db->bind(':id', $data['id']);
            $this->db->bind(':manager_id', $data['manager_id']);
            
            $this->db->bind(':content', $data['content']);
            

            if($this->db->execute()){
                return true;
            }else{
                return false;
            }

        }

        public function modifyQuestionnaire($data){
            $this->db->query('UPDATE qquestion SET QQuestion_content = contents WHERE QQuestion_id  = :id');

            $this->db->bind(':member_id', $data['id']);
            $this->db->bind(':product_id', $data['manager_id']);
            
            $this->db->bind(':contents', $data['content']);

            if($this->db->execute()){
                return true;
            }else{
                return false;
            }


        }

        public function deleteQuestionnaire($data){

            $this->db->query('DELETE FROM qquestion WHERE QQuestion_id  = :id');

            $this->db->bind(':id', $data['id']);
            
            
            

            if($this->db->execute()){
                return true;
            }else{
                return false;
            }
        }

        // getMethods
        public function getAllMember(){

            $this->db->query('SELECT * FROM member ;');
            $data = $this->db->resultSet();
            return $data;
        
        }

        public function getAllProduct(){

            $this->db->query('SELECT * FROM product ;');
            $data = $this->db->resultSet();
            return $data;
        
        }

        public function getAllComment(){

            $this->db->query('SELECT * FROM productcomment ;');
            $data = $this->db->resultSet();
            return $data;

        }

        public function getAllManager(){

            $this->db->query('SELECT * FROM manager ;');
            $data = $this->db->resultSet();
            return $data;

        }

        public function getAllQuestionnaire(){

            $this->db->query('SELECT * FROM qquestion ;');
            $data = $this->db->resultSet();
            return $data;

        }

        public function findMemberByEmail($email){
            $this->db->query('SELECT * FROM member WHERE Member_email = :email ;');

            $this->db->bind(':email', $email);
            $data = $this->db->resultSet();
            if($data){
                return true;
            }else{
                return false;
            }

        }

    };


?>