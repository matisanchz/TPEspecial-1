<?php

require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class SubclassView extends ConexionView{

    public function __construct(){
        parent::__construct();
    }

    function showSubclasses($subclasses) {

        $this->smarty->assign('count', count($subclasses)); 
        $this->smarty->assign('subclasses', $subclasses);
        $this->smarty->display('subclassList.tpl');
    }

    public function showFormSubclass($param, $id, $classes){
        $this->smarty->assign('param', $param);
        $this->smarty->assign('id', $id);
        $this->smarty->assign('classes', $classes);
        $this->smarty->display('formSubclass.tpl');
    } 
}