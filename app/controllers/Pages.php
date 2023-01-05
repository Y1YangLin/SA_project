<?php
    class Pages extends Controller{
        public function __construct() {

        }

        public function index(){
            $data = [
                // 'title' => 'Welcome'
            ];

            $this->view('pages/index', $data);
        }

        public function dashboard(){
            $this->view('pages/dashboard');
        }

        public function membercenter(){
            $this->view('pages/membercenter');
        }

    }

?>