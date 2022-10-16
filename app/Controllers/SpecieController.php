<?php

require_once './app/Controllers/GenericController.php';
require_once './app/Models/SpecieModel.php';
require_once './app/Views/SpecieView.php';
// require_once './app/Helpers/AuthHelper.php';

class SpecieController extends GenericController{

    // private $helper;
    private $modelSubclass;

    public function __construct(){
        parent::__construct();
        $this->view = new SpecieView;
        $this->model = new SpecieModel;
        $this->modelSubclass = new SubclassModel;
        // $this->helper = new AuthHelper();

    }

    public function showSpecies($name=null) {
        if(isset($name)){
            $species = $this->model->getSpeciesBySubclass($name);
        }
        else{
            $species = $this->model->getAllSpecies();
        }
        $this->view->showSpecies($species);
    }

    public function showSpecie($table, $id){
        $item = $this->model->getSpecieBySubclass($table, $id);
        $this->view->showSpecie($item);
    }

    public function showFormSpecie($param, $id=null){
        $this->checkLoggedIn();
        $subclasses = $this->modelSubclass->getSubclassesNames();
        $this->view->showFormSpecie($param, $id, $subclasses);
    }

    public function DeleteSpecie($table, $id){
        $this->checkLoggedIn();
        $this->model->DeleteSpecieById($id);
        $this->view->showMessage($table, $id);
    }

    public function editSpecie($id){
        $this->checkLoggedIn();
        $scientific_name = $_POST['scientific_name'];
        $author = $_POST['author'];
        $location = $_POST['location'];
        $id_subclass = (int)$_POST['id_subclass'];
        $photo = $_POST['photo'];

        $this->model->editSpecie($scientific_name, $author, $location, $id_subclass, $photo, $id);

        header("Location: " . BASE_URL);
    }

    public function addSpecie(){
        $this->checkLoggedIn();
        $scientific_name = $_POST['scientific_name'];
        $author = $_POST['author'];
        $location = $_POST['location'];
        $id_subclass = $_POST['id_subclass'];
        $photo = $_POST['photo'];
        $this->model->insertSpecie($scientific_name, $author, $location, $id_subclass, $photo);
        header("Location: " . BASE_URL);
    }

}