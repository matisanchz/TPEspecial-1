<?php

require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class ConexionView{
    protected $smarty;

    public function __construct() {
        $this->smarty = new Smarty();
    }

    function showError(){
        $this->smarty->display('error.tpl');
    }

    public function showHome(){
        $this->smarty->display('home.tpl');
    }

    public function showMessage($table, $id){
        $this->smarty->assign('table', $table);
        $this->smarty->assign('id', $id);
        $this->smarty->display('message.tpl');
    }

    public function showDelete($param, $id){
        $this->smarty->assign('param', $param);
        $this->smarty->assign('id', $id);
        $this->smarty->display('delete.tpl');
    }

    public function showAbout(){
        $this->smarty->display('about.tpl');
    }

}