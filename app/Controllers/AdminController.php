<?php

    require_once './app/Models/ConexionModel.php';
    require_once './app/Models/ClassModel.php';
    require_once './app/Models/SubclassModel.php';
    require_once './app/Models/SpecieModel.php';
    require_once './app/Views/MolluscsView.php';

    class AdminController{
        private $view;
        private $classModel;
        private $subclassModel;
        private $specieModel;

        public function __construct(){
            $this->view = new MolluscsView;
            $this->classModel = new ClassModel;
            $this->subclassModel = new SubclassModel;
            $this->specieModel = new SpecieModel;
        }

        public function addClass(){
            
            // Crear form y Agregar variables con method POST
            $name = $_POST['name'];
            $author = $_POST['author'];
            $features = $_POST['features'];

            $this->classModel->insertClass($name, $author, $features);

            header("Location: " . BASE_URL);
        }

        public function addSubclass(){
            
            // Crear form y Agregar variables con method POST
            $name = $_POST['name'];
            $author = $_POST['author'];
            $id_class = $_POST['class'];

            $this->subclassModel->insertSubclass($name, $author, $id_class);

            header("Location: " . BASE_URL);
        }

        public function addSpecie(){
            
            // Crear form y Agregar variables con method POST
            $scientific_name = $_POST['name'];
            $author = $_POST['author'];
            $habitat = $_POST['habitat'];
            $id_subclass = $_POST['id'];
            $photo = $_POST['photo'];

            $this->specieModel->insertSpecie($scientific_name, $author, $habitat, $id_subclass, $photo);

            header("Location: " . BASE_URL);
        }
    }
