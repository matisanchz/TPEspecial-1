<?php

    class ConexionModel{
        protected $db;

        public function __construct() {
            $this->db = new PDO('mysql:host=localhost;'.'dbname=db_molluscs;charset=utf8', 'root', '');
        }

        // public function getAll($table){
        //     $query = $this->db->prepare("SELECT * FROM ?");
        //     $query->execute([$table]);

        //     $registers = $query->fetchAll(PDO::FETCH_OBJ);
            
        //     return $registers;
        // }
    }