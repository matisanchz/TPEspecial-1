<?php

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

        public function getSubclassesById($id) {
            $query = $this->db->prepare("SELECT * FROM Subclass
                                        WHERE id_class=(?)");
            $query->execute([$id]);

            $subclasses = $query->fetchAll(PDO::FETCH_OBJ);
            
            return $subclasses;
        }


    }