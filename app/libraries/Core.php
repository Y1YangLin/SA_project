<?php

    class Core {
        protected $currentController = 'Pages';
        protected $currentMethod = 'index';
        protected $params = [];

        public function __construct(){
            // print_r($this->getUrl());
            $url = $this->getUrl();
            

            

            if(file_exists('../app/controllers/'. ucwords($url[0]). '.php') ) {
                // If exists, set as controller
                $this->currentController = ucwords($url[0]);
                
               
                
                unset($url[0]);
            }

            
            // Require the controller
            require_once '../app/controllers/'. $this->currentController .'.php';
            
            // Instantiate controller class
            $this->currentController = new $this->currentController();
            // print_r($this->currentController);
            // exit;
            
            if(isset($url[1])) {
                
                if(method_exists($this->currentController, $url[1])){
                    $this->currentMethod = $url[1];
                    
                    unset($url[1]);
                }
            }
            
            $this->params = $url ? array_values($url) : [];
            
            // print_r($this->params);
            // print_r($this->currentController);
            // print_r($this->currentMethod);
            // exit;
            
            call_user_func_array([$this->currentController, $this->currentMethod], $this->params);

        }

        public function getUrl() {

        

            if(isset($_GET['url']) ) {
                $url = rtrim($_GET['url'], '/');
                $url = filter_var($url, FILTER_SANITIZE_URL);
                $url = explode('/', $url);

                // print_r($url);
                // exit;


                return $url;
            }
        }
    }
?>