<?php
    class Users extends Controller{
        public function __construct() {
            $this->userModel = $this->model('User');
        }

        public function signup(){
            
            if($_SERVER['REQUEST_METHOD'] == 'POST'){

                $_POST = filter_input_array(INPUT_POST,FILTER_DEFAULT); // 516

                //拿signup資料 
                $data =[
                    'username' => trim($_POST['name']),
                    'password' => trim($_POST['pwd']),
                    'passwordConfirmation' => trim($_POST['repwd']),
                    'email' => trim($_POST['email']),
                    
                    'username_err' => '',
                    'password_err' => '',
                    'passwordConfirmation_err' => '',
                    'email_err' => '',
                ];

                
                if(empty($data['username'])){
                    $data['username_err'] = 'Please enter username';
                } else {
                    
                    if($this->userModel->findUserByUsername($data['username'])){
                        $data['username_err'] = 'Username is already used';
                    }
                }

                
                if(empty($data['password'])){
                    $data['password_err'] = 'Please enter password';
                } elseif (strlen($data['password'] < 6)){
                    $data['password_err'] = 'Password must be at least 6 characters';
                }

                
                if(empty($data['passwordConfirmation'])){
                    $data['passwordConfirmation_err'] = 'Please confirm password';
                } else {
                    if($data['password'] != $data['passwordConfirmation']){
                        $data['passwordConfirmation_err'] = 'Passwords do not match';
                    }
                }

                
                if(empty($data['email'])){
                    $data['email_err'] = 'Please enter email';
                } else {
                    
                    if($this->userModel->findUserByEmail($data['email'])){
                        $data['email_err'] = 'Email is already used';
                    }
                }


                if(empty($data['username_err']) && empty($data['password_err']) && empty($data['passwordConfirmation_err']) && empty($data['email_err'])){
                    
                    
                    //hash密碼 -> model處理
                    $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                    
                    if($this->userModel->register($data)){
                        redirect('users/login');
                    }else{
                        die('something went wrong');
                    }
                } else {
                    
                    $this->view('users/login', $data);
                }

            } else {
                
                $data =[
                    'username' => '',
                    'password' => '',
                    'passwordConfirmation' => '',
                    'email' => '',

                    'username_err' => '',
                    'password_err' => '',
                    'passwordConfirmation_err' => '',
                    'email_err' => '',
                ];

                // Load view
                $this->view('users/login', $data);
            }

        }

        public function login() {
            
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                
                $_POST = filter_input_array(INPUT_POST,FILTER_DEFAULT);


                $data = [
                    'email' => trim($_POST['email']),
                    'password' => trim($_POST['pwd']),
                    'email_err' => '',
                    'password_err' => ''
                ];

                
                if(empty($data['email'])){
                    $data['email_err'] = 'Please enter email';
                }

                
                if(empty($data['password'])){
                    $data['password_err'] = 'Please enter password';
                }

                
                if($this->userModel->findUserByEmail($data['email'])){

                } else {
                    
                    $data['email_err'] = 'No useremail found';
                }

                if(empty($data['email_err']) && empty($data['password_err'])){
                    
                    $loggedInUser = $this->userModel->login($data['email'], $data['password']);
                    
                    if($loggedInUser){

                        // Create seesion
                        $this->createUserSession($loggedInUser);
                    
                    }else{
                        $data['password_err'] = 'Password incorrect';
                        $this->view('users/login', $data);
                    }
                } else {
                    // Load view with error

                    $this->view('users/login', $data);
                }
            } else {
                
                $data = [
                    'email' => '',
                    'password' => '',
                    'username_err' => '',
                    'password_err' => ''
                ];
                // Load view
                $this->view('users/login', $data);
            }
            
                        
        }

        public function createUserSession($user){
            $_SESSION['user_id'] = $user->Member_id;
            $_SESSION['user_email'] = $user->Member_email;
            
            // $_SESSION['user_id'] = $user->id;
            redirect('pages/dashboard');
        }

        public function logout(){
            unset($_SESSION['user_id']);
            unset($_SESSION['user_email']);
            
            session_destroy();
            redirect('users/login');
        }
    }