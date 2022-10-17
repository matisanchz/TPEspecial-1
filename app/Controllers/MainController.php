<?php

require_once './app/Controllers/GenericController.php';
require_once './app/Views/ConexionView.php';

class MainController extends GenericController{

    public function __construct(){
        parent::__construct();
        $this->view = new ConexionView();
    }

    public function showDelete($param, $id){
        $this->checkLoggedIn();
        $this->view->showDelete($param, $id);
    }

    public function showError(){
        $this->view->showError();
    }

    public function showHome(){
        $this->view->showHome();
    }

    public function showAbout(){
        $this->view->showAbout();
    }
}