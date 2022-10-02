<?php

    require_once './app/Models/ConexionModel.php';
    require_once './app/Models/ClassModel.php';
    require_once './app/Models/SubclassModel.php';
    require_once './app/Models/SpecieModel.php';
    require_once './app/Views/MolluscsView.php';

    class MolluscsController{
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

        public function showClasses() {
            $classes = $this->classModel->getAllClasses();
            $this->view->showClasses($classes);
        }

        public function showSubclasses() {
            $subclasses = $this->subclassModel->getAllSubclasses();
            $this->view->showSubclasses($subclasses);
        }
        public function showSpecies() {
            $species = $this->specieModel->getAllSpecies();
            $this->view->showSpecies($species);
        }

        public function showError(){
            $this->view->showError();
        }

        public function showHome(){
            $this->view->showHome();
        }
    
    


    }