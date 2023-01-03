<?php

    class Admin{

        public function __construct() {
            $this->db = new Database;


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

        //Comment

        //Manager

        //Questionnaire

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