<?php

    class ConexionModel{
        protected $db;

        public function __construct() {
            $this->db = new PDO('mysql:host=localhost;'.'dbname=db_molluscs;charset=utf8', 'root', '');
        }
    }