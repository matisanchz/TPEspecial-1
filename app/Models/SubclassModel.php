<?php

    class SubclassModel extends ConexionModel{

        public function __construct() {
            parent::__construct();
        }

        public function getAllSubclasses() {
            $query = $this->db->prepare("SELECT * FROM Subclass");
            $query->execute();

            $subclasses = $query->fetchAll(PDO::FETCH_OBJ);
            
            return $subclasses;
        }
    }