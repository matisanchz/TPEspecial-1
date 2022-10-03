<?php

    class SpecieModel extends ConexionModel{

        public function __construct() {
            parent::__construct();
        }

        public function getSpecie($table, $id) {
            $query = $this->db->prepare("SELECT a.*, b.name as Subclass, b.author as AuthorSubclass, c.name as Class, c.author as AuthorClass, c.id_class
                                        FROM 
                                        Specie a INNER JOIN Subclass b ON a.id_subclass = b.id_subclass
                                                INNER JOIN Class c ON b.id_class = c.id_class 
                                        WHERE id_specie = (?)");
            $query->execute([$id]);

            $specie = $query->fetchAll(PDO::FETCH_OBJ);
            
            return $specie;
        }

        public function getAllSpecies() {
            $query = $this->db->prepare("SELECT * FROM Specie");
            $query->execute();

            $species = $query->fetchAll(PDO::FETCH_OBJ);
            
            return $species;
        }

        public function insertSpecie($scientific_name, $author, $location, $id_subclass, $photo) {
            $query = $this->db->prepare("INSERT INTO Specie (scientific_name, author, location, id_subclass, photo) VALUES (?, ?, ?, ?, ?)");
            $query->execute([$scientific_name, $author, $location, $id_subclass, $photo]);
        }

        public function DeleteSpecieById($id){
            $query = $this->db->prepare("DELETE FROM Specie WHERE id_specie = (?)");
            $query->execute([$id]);
        }

        public function editSpecie($scientific_name, $author, $location, $id_subclass, $photo, $id){
            $query = $this->db->prepare("UPDATE Specie SET scientific_name=(?),
                                                        author=(?),
                                                        location=(?),
                                                        id_subclass=(?),
                                                        photo=(?) 
                                        WHERE id_specie=(?)");
            $query->execute([$scientific_name, $author, $location, $id_subclass, $photo, $id]);
        }
    }