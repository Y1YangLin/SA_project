<?php
    class User {
        public function __construct() {
            $this->db = new Database;
        }

        
        public function register($data){
            $this->db->query('INSERT INTO member (Member_name, Member_password, Member_email) VALUES 
            (:username, :password, :email)');
            
            
            $this->db->bind(':username', $data['username']);
            $this->db->bind(':password', $data['password']);
            $this->db->bind(':email', $data['email']);

            
            if($this->db->execute()){
                return true;
            } else {
                return false;
            }
            
        }

        
        public function login($email, $password){
            $this->db->query('SELECT * FROM member WHERE Member_email = :email');
            $this->db->bind(':email', $email);

            $row = $this->db->single();

            $hashed_password = $row->Member_password;

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

        
        public function findUserByUsername($username){
            $this->db->query('SELECT * FROM member WHERE Member_name = :username');
            $this->db->bind(':username', $username);

            $row = $this->db->single();

            
            if($this->db->rowCount() > 0){
                return true;
            } else {
                return false;
            }
        }

        
        public function findUserByEmail($email){
            $this->db->query('SELECT * FROM member WHERE Member_email = :email');
            $this->db->bind(':email', $email);

            $row = $this->db->single();

            
            if($this->db->rowCount() > 0){
                return true;
            } else {
                return false;
            }
        }

    }