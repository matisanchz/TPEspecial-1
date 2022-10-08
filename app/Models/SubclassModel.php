<?php

require_once './app/Models/ConexionModel.php';

    class SubclassModel extends ConexionModel{

        public function __construct() {
            parent::__construct();
        }

        public function insertSubclass($name, $author, $id_class) {
            $query = $this->db->prepare("INSERT INTO Subclass (name, author, id_class) VALUES (?, ?, ?)");
            $query->execute([$name, $author, $id_class]);
        }

        public function DeleteSubclassById($id){
            $query = $this->db->prepare("DELETE FROM Subclass WHERE id_subclass = (?)");
            $query->execute([$id]);
        }

        public function editSubclass($name, $author, $id_class, $id){
            $query = $this->db->prepare("UPDATE Subclass SET name=(?),
                                                        author=(?),
                                                        id_class=(?) 
                                        WHERE id_subclass=(?)");
            $query->execute([$name, $author, $id_class, $id]);
        }

        public function getAllSubclasses() {
            $query = $this->db->prepare("SELECT * FROM Subclass");
            $query->execute();

            $subclasses = $query->fetchAll(PDO::FETCH_OBJ);
            
            return $subclasses;
        }

        public function getSubclassesByClass($name) {
            $query = $this->db->prepare("SELECT s.* FROM Subclass s
                                        INNER JOIN Class c ON c.id_class = s.id_class
                                        WHERE c.name = (?)");
            $query->execute([$name]);

            $subclasses = $query->fetchAll(PDO::FETCH_OBJ);
            
            return $subclasses;
        }

        public function getClassesNames(){
            $query = $this->db->prepare("SELECT DISTINCT a.id_class, b.name FROM Subclass a
                                        INNER JOIN Class b ON 
                                        a.id_class = b.id_class");
            $query->execute();

            $classes = $query->fetchAll(PDO::FETCH_OBJ);
            
            return $classes;
        }

    }