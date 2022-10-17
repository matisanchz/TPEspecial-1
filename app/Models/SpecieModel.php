<?php

require_once './app/Models/ConexionModel.php';

    class SpecieModel extends ConexionModel{

        public function __construct() {
            parent::__construct();
        }

        public function getSpecieById($id) {
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


        public function getSpeciesBySubclass($name) {
            $query = $this->db->prepare("SELECT a.*, b.name as SubclassName FROM Specie a
                                        INNER JOIN Subclass b
                                        ON a.id_subclass = b.id_subclass
                                        WHERE b.name = (?)");
            $query->execute([$name]);

            $species = $query->fetchAll(PDO::FETCH_OBJ);
            
            return $species;
        }

        public function insertSpecie($scientific_name, $author, $location, $id_subclass, $photo) {
            $pathImg = $this->uploadImage($photo);
            $query = $this->db->prepare("INSERT INTO Specie (scientific_name, author, location, id_subclass, photo) VALUES (?, ?, ?, ?, ?)");
            $query->execute([$scientific_name, $author, $location, $id_subclass, $pathImg]);
        }

        private function uploadImage($photo){
            $target = 'img/images-db/species/' . uniqid() . '.jpg';
            move_uploaded_file($photo, $target);
            return $target;
        }
        
        private function deleteImage($photo){
            unlink($photo);
        }

        public function DeleteSpecieById($id){
            $specie = $this->getSpecieById($id);

            $query = $this->db->prepare("DELETE FROM Specie WHERE id_specie = (?)");
            $query->execute([$id]);

            $this->deleteImage($specie[0]->photo);
        }

        public function editSpecie($scientific_name, $author, $location, $id_subclass, $photo, $id){
            $specie = $this->getSpecieById($id);
            $pathImg = $this->uploadImage($photo);
            $query = $this->db->prepare("UPDATE Specie SET scientific_name=(?),
                                                        author=(?),
                                                        location=(?),
                                                        id_subclass=(?),
                                                        photo=(?) 
                                        WHERE id_specie=(?)");
            $query->execute([$scientific_name, $author, $location, $id_subclass, $pathImg, $id]);
            $this->deleteImage($specie[0]->photo);
        }
    }