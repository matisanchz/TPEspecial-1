<?php

class GenericController{
    protected $view;
    protected $model;

    public function sessionStart(){
        session_start();
    }

    public function __construct(){
        $this->sessionStart();
    }
    

    // protected function checkLoggedIn() {
    //     session_start();
    //     if (!isset($_SESSION['IS_LOGGED'])) {
    //         header("Location: " . BASE_URL . 'login');
    //         die();
    //     }
    // } 

}