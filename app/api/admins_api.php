<?php

$this->db = new Database;

// $this->db->query('SELECT * FROM member ;');
// $Member = $this->db->resultSet();

$Member = array("test" => '1');

echo json_encode($Member);


// $this->db->query('SELECT * FROM manager ;');
// $Manager = $this->db->resultSet();

// 

