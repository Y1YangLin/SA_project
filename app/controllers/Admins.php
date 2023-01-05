<?php

    class Admins extends Controller{

        public function __construct(){
            
            $this->adminModel = $this->model('Admin');

            
        
        }


        //Member
        public function addMember(){

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $_POST = filter_input_array(INPUT_POST, FILTER_DEFAULT);
                
                // 新增會員的資料
                $data = [
                    'username' => trim($_POST['name']),
                    'email' => trim($_POST['email']),
                    'password' => trim($_POST['password']),
                    'face_type' => trim($_POST['face_type']),
                    'date' => trim($_POST['date']),

                    'username_err' => '',
                    'password_err' => '',
                    'email_err' => '',
                    'date_err' => '',
                    'facetype_err' => '',

                ];
            
                if(empty($data['username'])){
                    $data['username_err'] = '請輸入使用者姓名 !';
                }

                if(empty($data['email'])){
                    $data['email_err'] = '請輸入信箱';
                }else{
                    if($this->adminModel->findMemberByEmail($data['email'])){
                        $data['email_err'] = '這個信箱有人註冊了';
                    }
                }

                if(empty($data['password'])){
                    $data['password_err'] = '請輸入密碼 !';
                }
            
                if(empty($data['face_type'])){
                    $data['facetype_err'] = '請輸入膚質id !';
                }

                if(empty($data['date'])){
                    $data['date_err'] = '請輸入日期 !';
                }

            }

            
            if(empty($data['username_err']) && empty($data['password_err']) && empty($data['email_err']) && empty($data['fatetype_err']) && empty($data['date_err'])){
                
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                
                if($this->adminModel->addMember($data)){
                    $this->Member();
                }else{
                    die('add member failed');
                }


            }


        }

        public function modifyMember(){

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $_POST = filter_input_array(INPUT_POST, FILTER_DEFAULT);
                
                // 修改會員的資料
                $data = [
                    
                    'userid' => trim($_POST['id']),
                    'username' => trim($_POST['name']),
                    'email' => trim($_POST['email']),
                    'face_type' => trim($_POST['face_type']),
                    'date' => trim($_POST['date']),

                    'userid_err' => '',
                    'username_err' => '',
                    'email_err' => '',
                    'date_err' => '',
                    'facetype_err' => '',

                ];
            
                if(empty($data['username'])){
                    $data['username_err'] = '請輸入使用者姓名 !';
                }

                // if(empty($data['email'])){
                //     $data['email_err'] = '請輸入信箱';
                // }else{
                //     if($this->adminModel->findMemberByEmail($data['email'])){
                //         $data['email_err'] = '這個信箱有人註冊了';
                //     }
                // }

                if(empty($data['face_type'])){
                    $data['facetype_err'] = '請輸入膚質id !';
                }

                if(empty($data['date'])){
                    $data['date_err'] = '請輸入日期 !';
                }

            }
            
            
            if(empty($data['username_err']) && empty($data['email_err'])){

                
                
                

                if($this->adminModel->modifyMember($data)){
                    
                    $this->Member();
                }else{
                    die('modify member failed');
                }


            }

        }

        public function deleteMember(){

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $_POST = filter_input_array(INPUT_POST, FILTER_DEFAULT);
                
                // 刪除會員的資料
                $data = [
                    'userid' => trim($_POST['id']),
                                    
                ];
            
                
            }
            
            
            if($this->adminModel->deleteMember($data)){


                $this->Member();

            }else{
                die('delete member failed !');
            }

        }

        //Product

        public function addProduct(){

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $_POST = filter_input_array(INPUT_POST, FILTER_DEFAULT);
                
                // 新增產品
                $data = [
                    // 'id' => trim($_POST['id']),
                    'category_id' => trim($_POST['category_id']),
                    'facecategory_id' => trim($_POST['facecategory_id']),
                    'name' => trim($_POST['name']),
                    'intro' => trim($_POST['intro']),
                    'price' => trim($_POST['price']),
                    'img' => trim($_POST['img']),


                    'id_err' => '',
                    'category_id_err' => '',
                    'facecategory_id_err' => '',
                    'name_err' => '',
                    'intro_err' => '',
                    'price_err' => '',
                    'img_err' => '',

                ];
            
                if(empty($data['category_id'])){
                    $data['category_id_err'] = '請輸入產品ID !';
                }

                if(empty($data['facecategory_id'])){
                    $data['facecategory_id_err'] = '請輸入膚質ID !';
                }

                if(empty($data['name'])){
                    $data['name_err'] = '請輸入產品名稱 !';
                }
            
                if(empty($data['intro'])){
                    $data['intro_err'] = '請輸入intro !';
                }

                if(empty($data['price'])){
                    $data['price_err'] = '請輸入價錢 !';
                }

                if(empty($data['img'])){
                    $data['img_err'] = '請輸入圖片路徑 !';
                }

            }

            
            if(empty($data['category_id_err']) && empty($data['facecategory_id_err']) && empty($data['name_err']) && empty($data['intro_err']) && empty($data['price_err']) && empty($data['img_err'])){
                
                
                if($this->adminModel->addProduct($data)){
                    $this->Product();
                }else{
                    die('add product failed');
                }


            }


        }

        public function modifyProduct(){

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $_POST = filter_input_array(INPUT_POST, FILTER_DEFAULT);
                
                // 修改會員的資料
                $data = [

                    'id' => trim($_POST['id']),
                    'category_id' => trim($_POST['category_id']),
                    'facecategory_id' => trim($_POST['facecategory_id']),
                    'name' => trim($_POST['name']),
                    'intro' => trim($_POST['intro']),
                    'price' => trim($_POST['price']),
                    'img' => trim($_POST['img']),


                    'id_err' => '',
                    'category_id_err' => '',
                    'facecategory_id_err' => '',
                    'name_err' => '',
                    'intro_err' => '',
                    'price_err' => '',
                    'img_err' => '',

                ];
            
                if(empty($data['category_id'])){
                    $data['category_id_err'] = '請輸入產品ID !';
                }

                if(empty($data['facecategory_id'])){
                    $data['facecategory_id_err'] = '請輸入膚質ID !';
                }

                if(empty($data['name'])){
                    $data['name_err'] = '請輸入產品名稱 !';
                }
            
                if(empty($data['intro'])){
                    $data['intro_err'] = '請輸入intro !';
                }

                if(empty($data['price'])){
                    $data['price_err'] = '請輸入價錢 !';
                }

                if(empty($data['img'])){
                    $data['img_err'] = '請輸入圖片路徑 !';
                }

            }
            
            
            if(empty($data['category_id_err']) && empty($data['facecategory_id_err']) && empty($data['name_err']) && empty($data['intro_err']) && empty($data['price_err']) && empty($data['img_err'])){
                
                
                if($this->adminModel->modifyProduct($data)){
                    $this->Product();
                }else{
                    die('add product failed');
                }


            }

        }

        public function deleteProduct(){

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $_POST = filter_input_array(INPUT_POST, FILTER_DEFAULT);
                
                // 刪除會員的資料
                $data = [
                    'id' => trim($_POST['id']),
                                    
                ];
            
                
            }
            
            
            if($this->adminModel->deleteProduct($data)){


                $this->Product();

            }else{
                die('delete product failed !');
            }

        }

        //Manager

        public function addManager(){

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $_POST = filter_input_array(INPUT_POST, FILTER_DEFAULT);
                
                
                $data = [
                    // 'userid' => trim($_POST['id']),
                    'username' => trim($_POST['name']),
                    'email' => trim($_POST['email']),
                    'password' => trim($_POST['password']),
                    
                    'date' => trim($_POST['date']),

                    'username_err' => '',
                    'password_err' => '',
                    'email_err' => '',
                    'date_err' => '',
                    'facetype_err' => '',

                ];
            
                if(empty($data['username'])){
                    $data['username_err'] = '請輸入使用者姓名 !';
                }

                if(empty($data['email'])){
                    $data['email_err'] = '請輸入信箱';
                }else{
                    if($this->adminModel->findMemberByEmail($data['email'])){
                        $data['email_err'] = '這個信箱有人註冊了';
                    }
                }

                if(empty($data['password'])){
                    $data['password_err'] = '請輸入密碼 !';
                }
            
                if(empty($data['face_type'])){
                    $data['facetype_err'] = '請輸入膚質id !';
                }

                if(empty($data['date'])){
                    $data['date_err'] = '請輸入日期 !';
                }

            }

            
            if(empty($data['username_err']) && empty($data['password_err']) && empty($data['email_err']) && empty($data['fatetype_err']) && empty($data['date_err'])){
                
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                
                if($this->adminModel->addManager($data)){
                    $this->Manager();
                }else{
                    die('add Manager failed');
                }


            }


        }

        public function modifyManager(){

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $_POST = filter_input_array(INPUT_POST, FILTER_DEFAULT);
                
                
                $data = [
                    
                    'userid' => trim($_POST['id']),
                    'username' => trim($_POST['name']),
                    'email' => trim($_POST['email']),
                    
                    'date' => trim($_POST['date']),

                    'userid_err' => '',
                    'username_err' => '',
                    'email_err' => '',
                    'date_err' => '',
                    'facetype_err' => '',

                ];
            
                if(empty($data['username'])){
                    $data['username_err'] = '請輸入使用者姓名 !';
                }

                // if(empty($data['email'])){
                //     $data['email_err'] = '請輸入信箱';
                // }else{
                //     if($this->adminModel->findMemberByEmail($data['email'])){
                //         $data['email_err'] = '這個信箱有人註冊了';
                //     }
                // }

                if(empty($data['face_type'])){
                    $data['facetype_err'] = '請輸入膚質id !';
                }

                if(empty($data['date'])){
                    $data['date_err'] = '請輸入日期 !';
                }

            }
            
            
            if(empty($data['username_err']) && empty($data['email_err'])){

                
                
                

                if($this->adminModel->modifyManager($data)){
                    
                    $this->Manager();
                }else{
                    die('modify Manager failed');
                }


            }

        }

        public function deleteManager(){

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $_POST = filter_input_array(INPUT_POST, FILTER_DEFAULT);
                
                
                $data = [
                    'userid' => trim($_POST['id']),
                                    
                ];
            
                
            }
            
            
            if($this->adminModel->deleteManager($data)){


                $this->Manager();

            }else{
                die('delete Manager failed !');
            }

        }

        //Comment

        public function addComment(){

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $_POST = filter_input_array(INPUT_POST, FILTER_DEFAULT);
                
                
                $data = [
                    // 'id' => trim($_POST['id']),
                    'id' => trim($_POST['id']),
                    'member_id' => trim($_POST['member_id']),
                    'product_id' => trim($_POST['product_id']),
                    'content' => trim($_POST['content']),
                    'date' => trim($_POST['date']),
                    


                    'id_err' => '',
                    'member_id_err' => '',
                    'product_id_err' => '',
                    'content_err' => '',
                    'date_err' => '',
                    

                ];
            
                if(empty($data['id'])){
                    $data['id_err'] = '請輸入產品ID !';
                }

                if(empty($data['member_id'])){
                    $data['member_id_err'] = '請輸入膚質ID !';
                }

                if(empty($data['product_id'])){
                    $data['product_id_err'] = '請輸入產品名稱 !';
                }
            
                if(empty($data['content'])){
                    $data['content_err'] = '請輸入intro !';
                }

                if(empty($data['date'])){
                    $data['date_err'] = '請輸入價錢 !';
                }

            
            }

            
            if(empty($data['id_err']) && empty($data['member_id_err']) && empty($data['product_id_err']) && empty($data['content_err']) && empty($data['date_err'])){
                
                
                if($this->adminModel->addComment($data)){
                    $this->Comment();
                }else{
                    die('add Comment failed');
                }


            }


        }

        public function modifyComment(){

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $_POST = filter_input_array(INPUT_POST, FILTER_DEFAULT);
                
                
                $data = [
                    // 'id' => trim($_POST['id']),
                    'id' => trim($_POST['id']),
                    'member_id' => trim($_POST['member_id']),
                    'product_id' => trim($_POST['product_id']),
                    'content' => trim($_POST['content']),
                    'date' => trim($_POST['date']),
                    


                    'id_err' => '',
                    'member_id_err' => '',
                    'product_id_err' => '',
                    'content_err' => '',
                    'date_err' => '',
                    

                ];
            
                if(empty($data['id'])){
                    $data['id_err'] = '請輸入評論ID !';
                }

                if(empty($data['member_id'])){
                    $data['member_id_err'] = '請輸入會員ID !';
                }

                if(empty($data['product_id'])){
                    $data['product_id_err'] = '請輸入產品ID !';
                }
            
                if(empty($data['content'])){
                    $data['content_err'] = '請輸入內容 !';
                }

                if(empty($data['date'])){
                    $data['date_err'] = '請輸入日期 !';
                }

            }
            
            
            if(empty($data['category_id_err']) && empty($data['facecategory_id_err']) && empty($data['name_err']) && empty($data['intro_err']) && empty($data['price_err']) && empty($data['img_err'])){
                
                
                if($this->adminModel->modifyComment($data)){
                    $this->Comment();
                }else{
                    die('add Comment failed');
                }


            }

        }

        public function deleteComment(){

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $_POST = filter_input_array(INPUT_POST, FILTER_DEFAULT);
                
                // 刪除會員的資料
                $data = [
                    'id' => trim($_POST['id']),
                                    
                ];
            
                
            }
            
            
            if($this->adminModel->deleteComment($data)){


                $this->Comment();

            }else{
                die('delete Comment failed !');
            }

        }

        //Questionnaire

        public function Comment(){

            $data = $this->adminModel->getAllComment();
            
            $this->view('admins/Comment', $data);
            
        }

        public function Member(){

            $data = $this->adminModel->getAllMember();
            
            $this->view('admins/Member', $data);

        }

        public function Manager(){

            $data = $this->adminModel->getAllManager();
            
            $this->view('admins/Manager', $data);

        }

        public function Product(){

            $data = $this->adminModel->getAllProduct();
            
            $this->view('admins/Product', $data);

        }

        public function Questionnaire(){

            $data = $this->adminModel->getAllQuestionnaire();
            
            $this->view('admins/Questionnaire', $data);

        }

        public function Setting(){

            $data = [

            ];
            
            $this->view('admins/Setting', $data);

        }

        public function Logout(){

            $data = [

            ];
            
            $this->view('admins/Logout', $data);

        }

        public function YOFU(){

            $data = [

            ];
            
            $this->view('admins/YOFU', $data);

        }

        public function signup(){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){


            }
        }

        public function login(){
            $this->view('admins/login');
            if($_SERVER['REQUEST_METHOD'] == 'POST'){


            }
        }
        

        // public function logout(){

        //     unset($_SESSION['user_id']);
        //     unset($_SESSION['user_email']);
            
        //     session_destroy();
        //     redirect('admins/login');

        // }

        public function createAdminSession($admin){

            $_SESSION['admin_id'] = $admin->Manager_id;
                $_SESSION['admin_email'] = $admin->Manager_email;
                
                // $_SESSION['user_id'] = $user->id;
                redirect('pages/Commit');


        }

    };


?>