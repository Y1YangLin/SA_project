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