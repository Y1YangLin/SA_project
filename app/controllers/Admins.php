<?php

    class Admins extends Controller{

        public function __construct(){
            
            $this->adminModel = $this->model('Admin');

            // $this->view('admins/Commit');
            

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