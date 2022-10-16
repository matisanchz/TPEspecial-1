<?php

require_once './app/Controllers/GenericController.php';
require_once './app/Models/ClassModel.php';
require_once './app/Views/ClassView.php';
// require_once './app/Helpers/AuthHelper.php';


class ClassController extends GenericController{

    // private $helper;

    public function __construct(){
        parent::__construct();
        $this->view = new ClassView();
        $this->model = new ClassModel();
        // $this->helper = new AuthHelper();
    }

    public function showClasses() {
        $classes = $this->model->getAllClasses();
        $this->view->showClasses($classes);
    }

    public function showFormClass($param, $id=null){
        $this->checkLoggedIn();
        $this->view->showFormClass($param, $id);
    }

    public function DeleteClass($table, $id){
        $this->checkLoggedIn();
        $this->model->DeleteClassById($id);
        $this->view->showMessage($table, $id);
    }

    public function editClass($id){
        $this->checkLoggedIn();
        $name = $_POST['name'];
        $author = $_POST['author'];
        $features = $_POST['features'];

        $this->model->editClass($name, $author, $features, $id);

        header("Location: " . BASE_URL);
    }

    public function addClass(){
        $this->checkLoggedIn();
        $name = $_POST['name'];
        $author = $_POST['author'];
        $features = $_POST['features'];
        $this->model->insertClass($name, $author, $features);
        header("Location: " . BASE_URL);
    }

}