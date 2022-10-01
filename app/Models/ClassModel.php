<?php

    class ClassModel extends ConexionModel{

        public function __construct() {
            parent::__construct();
        }

        public function getAllClasses() {
            $query = $this->db->prepare("SELECT * FROM Class");
            $query->execute();

            $classes = $query->fetchAll(PDO::FETCH_OBJ);
            
            return $classes;
        }

        /**
        * Inserta una tarea en la base de datos.
        */
        public function insertClass($name, $author, $features) {
            $query = $this->db->prepare("INSERT INTO Class (name, author, features) VALUES (?, ?, ?)");
            $query->execute([$name, $author, $features]);
        }


        /**
         * Elimina una clase dado su nombre.
         */
        function deleteTaskById($id) {
            $query = $this->db->prepare('DELETE FROM task WHERE id = ?');
            $query->execute([$id]);
        }



        
    }