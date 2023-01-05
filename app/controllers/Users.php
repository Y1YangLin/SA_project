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
                    $data['username_err'] = '請輸入使用者姓名 !';
                }
                
                if(empty($data['password'])){
                    $data['password_err'] = '請輸入密碼 !';
                } elseif (strlen($data['password'] < 6)){
                    $data['password_err'] = '你的密碼沒料喔== 再一個';
                }

                
                if(empty($data['passwordConfirmation'])){
                    $data['passwordConfirmation_err'] = '請再次輸入密碼 !';
                } else {
                    if($data['password'] != $data['passwordConfirmation']){
                        $data['passwordConfirmation_err'] = '密碼不對喔 !';
                    }
                }

                
                if(empty($data['email'])){
                    $data['email_err'] = '請輸入信箱';
                } else {
                    if($this->userModel->findUserByEmail($data['email'])){
                        $data['email_err'] = '這個信箱有人註冊了==';
                    }
                }


                if(empty($data['username_err']) && empty($data['password_err']) && empty($data['passwordConfirmation_err']) && empty($data['email_err'])){
                    
                    
                    //hash密碼 -> model處理
                    $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                    
                    if($this->userModel->register($data)){
                        
                        $_SESSION['user_email'] = $data['email'];
                        
                        // redirect('pages/dashboard');
                        $this->view('pages/dashboard');

                    }else{
                        die('something went wrong');
                    }
                } else {
                    
                    $this->view('users/signup', $data);
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
                $this->view('users/signup', $data);
            }

        }

        public function login() {
            
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                
                $_POST = filter_input_array(INPUT_POST,FILTER_DEFAULT);


                $data = [
                    'email' => trim($_POST['email']),
                    'password' => trim($_POST['pwd']),
                    'email_err' => '',
                    'password_err' => '',

                    // thus signup can catch the array value
                    // 'username_err' => '',
                    // 'passwordConfirmation_err' => '',
                ];

                
                if(empty($data['password'])){
                    $data['password_err'] = '請輸入密碼';
                }

                if(empty($data['email'])){
                    $data['email_err'] = '請輸入信箱';
                }else if($this->userModel->findUserByEmail($data['email'])){

                } else {
                    
                    $data['email_err'] = '尚未註冊 找不到信箱 !!';
                }

                if(empty($data['email_err']) && empty($data['password_err'])){
                    
                    $loggedInUser = $this->userModel->login($data['email'], $data['password']);
                    
                    if($loggedInUser){

                        
                        $this->createUserSession($loggedInUser);
                    
                    }else{
                        $data['password_err'] = '就這 ? 密碼錯了';
                        $this->view('users/login', $data);
                    }
                } else {
                    

                    $this->view('users/login', $data);
                }
            } else {
                
                $data = [
                    'email' => '',
                    'password' => '',
                    'email_err' => '',
                    'password_err' => '',

                    // thus signup can catch the array value
                    // 'username_err' => '',
                    // 'passwordConfirmation_err' => '',

                ];
                
                $this->view('users/login', $data);
            }
            
                        
        }

        public function MemberCenter(){

            

            $user = $this->userModel->getUserDataById($_SESSION['user_id']);
            $like = $this->getLikeRecord();
            $comment = $this->getCommentRecord();
            $collection = $this->getCollectionRecord();
            // print_r($like);
            // exit;

            $data = [
                'user' => $user,
                'like' => $like,
                'comment' => $comment,
                'collection' => $collection,
            ];
            // print_r($data['collection']);
            // exit;

            $this->view('pages/membercenter', $data);
        }

        public function editMemberData(){

            $_POST = filter_input_array(INPUT_POST,FILTER_DEFAULT);

                
                $data =[
                    'username' => trim($_POST['name']),
                    'email' => trim($_POST['email']),
                    'birthday' => trim($_POST['bd']),
                ];
            if($this->userModel->editUserData($data)){

                $this->MemberCenter();

            }else{
                die('edit failed .. ');
            }
            
        }

        public function editMemberPwd(){
            $_POST = filter_input_array(INPUT_POST,FILTER_DEFAULT);

                
                $data =[
                    'oldPwd' => trim($_POST['oldPwd']),
                    'newPwd' => trim($_POST['newPwd']),
                    'newPwd2' => trim($_POST['newPwd2']),

                    'pwd_err' => '',

                ];

            $userdata = $this->userModel->getUserDataById($_SESSION['user_id']);

            if(empty($data['oldPwd']) || empty($data['newPwd']) || empty($data['newPwd2'])){
                $data['pwd_err'] = '密碼不能為空喔 !';
            }

            if($data['newPwd'] != $data['newPwd2']){
                $data['pwd_err'] = '密碼不對==';

            }

            
            if(empty($data['pwd_err'])){
                // echo 'test';
                
                if(password_verify($data['oldPwd'], $userdata->Member_password)){
                        $data['newPwd'] = password_hash($data['newPwd'], PASSWORD_DEFAULT);
                        if($this->userModel->editUserpwd($data)){
                            $this->MemberCenter();

                        }else{
                            die('edit failed .. ');
                        }
                
                }else{
                    $data['pwd_err'] = '密碼不對喔 ==';
                    echo $data['pwd_err'];
                    exit;
                }
            }else{
                // print_r($data);
                // exit;
                $this->MemberCenter();
                
            }
            
        }

        public function getLikeRecord(){

            $data = $this->userModel->getUserLikedItems($_SESSION['user_id']);

            return $data;
        }

        public function getCollectionRecord(){
            $data = $this->userModel->getUserCollection($_SESSION['user_id']);

            return $data;
        }

        public function getCommentRecord(){
            $data = $this->userModel->getUserComment($_SESSION['user_id']);

            return $data;
        }

        public function createUserSession($user){
            $_SESSION['user_id'] = $user->Member_id;
            $_SESSION['user_email'] = $user->Member_email;
            
            $data = $user->Member_name;

            // $_SESSION['user_id'] = $user->id;
            redirect('pages/dashboard');

            // $this->view('pages/dashboard', $data);

        }

        public function logout(){
            unset($_SESSION['user_id']);
            unset($_SESSION['user_email']);
            
            session_destroy();
            redirect('users/login');
        }
    }