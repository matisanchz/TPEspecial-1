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

        public function showSpecie($table, $id){
            $item = $this->specieModel->getSpecie($table, $id);
            $this->view->showSpecie($item);
        }

        public function showClasses() {
            $classes = $this->classModel->getAllClasses();
            $this->view->showClasses($classes);
        }

        public function showSubclasses($id) {
            $subclasses = $this->subclassModel->getSubclassesById($id);
            $this->view->showSubclasses($subclasses);
        }

        public function showSpecies($id) {
            $species = $this->specieModel->getSpeciesById($id);
            $this->view->showSpecies($species);
        }

        public function showError(){
            $this->view->showError();
        }

        public function showHome(){
            $this->view->showHome();
        }
    
    


    }