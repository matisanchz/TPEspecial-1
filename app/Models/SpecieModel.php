<?php

    class SpecieModel extends ConexionModel{

        public function __construct() {
            parent::__construct();
        }

        public function getAllSpecies() {
            $query = $this->db->prepare("SELECT * FROM Specie");
            $query->execute();

            $species = $query->fetchAll(PDO::FETCH_OBJ);
            
            return $species;
        }
    }