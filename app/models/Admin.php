<?php

    class Admin{

        public function __construct() {
            $this->db = new Database;


        }
    
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

    };


?>