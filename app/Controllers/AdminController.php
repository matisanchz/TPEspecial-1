<?php

    require_once './app/Models/ConexionModel.php';
    require_once './app/Models/ClassModel.php';
    require_once './app/Models/SubclassModel.php';
    require_once './app/Models/SpecieModel.php';
    require_once './app/Views/AdminView.php';

    class AdminController{
        private $view;
        private $adminView;
        private $classModel;
        private $subclassModel;
        private $specieModel;

        public function __construct(){
            $this->view = new MolluscsView;
            $this->adminView = new AdminView;
            $this->classModel = new ClassModel;
            $this->subclassModel = new SubclassModel;
            $this->specieModel = new SpecieModel;
        }

        public function DeleteClass($table, $id){
            $this->classModel->DeleteClassById($id);
            $this->adminView->showMessage($table, $id);
        }

        public function DeleteSubclass($table, $id){
            $this->subclassModel->DeleteSubclassById($id);
            $this->adminView->showMessage($table, $id);
        }

        public function DeleteSpecie($table, $id){
            $this->specieModel->DeleteSpecieById($id);
            $this->adminView->showMessage($table, $id);
        }

        public function showFormClass($param, $id){
            $this->adminView->showFormClass($param, $id);
        }

        public function showFormSubclass($param, $id){
            $this->adminView->showFormSubclass($param, $id);
        }

        public function showFormSpecie($param, $id){
            $this->adminView->showFormSpecie($param, $id);
        }

        public function showDelete($param, $id){
            $this->adminView->showDelete($param, $id);
        }

        public function editClass($id){
            $name = $_POST['name'];
            $author = $_POST['author'];
            $features = $_POST['features'];

            $this->classModel->editClass($name, $author, $features, $id);

            header("Location: " . BASE_URL);
        }

        public function editSubclass($table, $id){
            $name = $_POST['name'];
            $author = $_POST['author'];
            $id_class = (int)$_POST['id_class'];
            $this->subclassModel->editSubclass($name, $author, $id_class, $id);
            $this->adminView->showMessage($table, $id);
            header("Location: " . BASE_URL);
        }

        public function editSpecie($id){
            $scientific_name = $_POST['scientific_name'];
            $author = $_POST['author'];
            $location = $_POST['location'];
            $id_subclass = (int)$_POST['id_subclass'];
            $photo = $_POST['photo'];

            $this->specieModel->editSpecie($scientific_name, $author, $location, $id_subclass, $photo, $id);

            header("Location: " . BASE_URL);
        }

        public function addClass(){
            $name = $_POST['name'];
            $author = $_POST['author'];
            $features = $_POST['features'];
            $this->classModel->insertClass($name, $author, $features);
            header("Location: " . BASE_URL);
        }

        public function addSubclass(){
            $name = $_POST['name'];
            $author = $_POST['author'];
            $id_class = $_POST['id_class'];
            $this->subclassModel->insertSubclass($name, $author, $id_class);
            header("Location: " . BASE_URL);
        }

        public function addSpecie(){
            $scientific_name = $_POST['scientific_name'];
            $author = $_POST['author'];
            $location = $_POST['location'];
            $id_subclass = $_POST['id_subclass'];
            $photo = $_POST['photo'];
            $this->specieModel->insertSpecie($scientific_name, $author, $location, $id_subclass, $photo);
            header("Location: " . BASE_URL);
        }
    }
