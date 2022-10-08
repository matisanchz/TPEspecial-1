<?php

require_once './app/Controllers/GenericController.php';
require_once './app/Models/SubclassModel.php';
require_once './app/Views/SubclassView.php';
require_once './app/Helpers/AuthHelper.php';

class SubclassController extends GenericController{

    private $helper;

    public function __construct(){
        parent::__construct();
        $this->view = new SubclassView();
        $this->model = new SubclassModel();
        $this->helper = new AuthHelper();
    }

    public function showSubclasses($name = null) {
        if(isset($name)){
            $subclasses = $this->model->getSubclassesByClass($name);
        }
        else{
            $subclasses = $this->model->getAllSubclasses();
        }
        $this->view->showSubclasses($subclasses);
    }

    public function showFormSubclass($param, $id=null){
        $this->helper->checkLoggedIn();
        $classes = $this->model->getClassesNames();//a chequear
        $this->view->showFormSubclass($param, $id, $classes);
    }

    public function DeleteSubclass($table, $id){
        $this->helper->checkLoggedIn();
        $this->model->DeleteSubclassById($id);
        $this->view->showMessage($table, $id);
    }

    public function editSubclass($table, $id){
        $this->helper->checkLoggedIn();
        $name = $_POST['name'];
        $author = $_POST['author'];
        $id_class = (int)$_POST['id_class'];
        $this->model->editSubclass($name, $author, $id_class, $id);
        $this->view->showMessage($table, $id);
        header("Location: " . BASE_URL);
    }

    public function addSubclass(){
        $this->helper->checkLoggedIn();
        $name = $_POST['name'];
        $author = $_POST['author'];
        $id_class = $_POST['id_class'];
        $this->model->insertSubclass($name, $author, $id_class);
        header("Location: " . BASE_URL);
    }
}