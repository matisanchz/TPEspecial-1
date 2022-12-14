<?php

require_once './app/Models/ConexionModel.php';

    class ClassModel extends ConexionModel{

        public function __construct() {
            parent::__construct();
        }

        public function getClassesNames(){
            $query = $this->db->prepare("SELECT id_class, name FROM Class ORDER BY name");
            $query->execute();

            $classes = $query->fetchAll(PDO::FETCH_OBJ);
            
            return $classes;
        }

        public function getAllClasses() {
            $query = $this->db->prepare("SELECT * FROM Class ORDER BY name");
            $query->execute();

            $classes = $query->fetchAll(PDO::FETCH_OBJ);
            
            return $classes;
        }

        public function getClassById($id) {
            $query = $this->db->prepare("SELECT * FROM Class WHERE id_class=(?)");
            $query->execute([$id]);

            $class = $query->fetchAll(PDO::FETCH_OBJ);
            
            return $class;
        }

        public function insertClass($name, $author, $features) {
            $query = $this->db->prepare("INSERT INTO Class (name, author, features) VALUES (?, ?, ?)");
            $query->execute([$name, $author, $features]);
        }

        public function DeleteClassById($id){
            $query = $this->db->prepare("DELETE FROM Class WHERE id_class = (?)");
            $query->execute([$id]);
        }

        public function editClass($name, $author, $features, $id){
            $query = $this->db->prepare("UPDATE Class SET name=?,
                                                        author=?,
                                                        features=? 
                                        WHERE id_class=?");
            $query->execute([$name, $author, $features, $id]);
        }

        
    }