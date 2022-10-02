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

        public function insertSpecie($scientific_name, $author, $habitat, $id_subclass, $photo) {
            $query = $this->db->prepare("INSERT INTO Specie (scientific_name, author, habitat, id_subclass, photo) VALUES (?, ?, ?, ?, ?)");
            $query->execute([$scientific_name, $author, $habitat, $id_subclass, $photo]);
        }

        public function DeleteSpecieById($id){
            $query = $this->db->prepare("DELETE FROM Specie WHERE id_specie = (?)");
            $query->execute([$id]);
        }

        public function editSpecie($scientific_name, $author, $habitat, $id_subclass, $photo, $id){
            $query = $this->db->prepare("UPDATE Specie SET scientific_name=?,
                                                        author=?,
                                                        habitat=?,
                                                        id_subclass=?,
                                                        photo=? 
                                        WHERE id_specie=?");
            $query->execute([$scientific_name, $author, $habitat, $id_subclass, $photo, $id]);
        }
    }