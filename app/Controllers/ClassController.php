<?php

require_once './app/Controllers/GenericController.php';
require_once './app/Models/ClassModel.php';
require_once './app/Views/ClassView.php';


class ClassController extends GenericController{

    public function __construct(){
        parent::__construct();
        $this->view = new ClassView();
        $this->model = new ClassModel();
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

        $this->view->showAddEditMessage($name, $id);
    }

    public function addClass(){
        $this->checkLoggedIn();
        $name = $_POST['name'];
        $author = $_POST['author'];
        $features = $_POST['features'];

        $this->model->insertClass($name, $author, $features);
        
        $this->view->showAddEditMessage($name);
    }

}