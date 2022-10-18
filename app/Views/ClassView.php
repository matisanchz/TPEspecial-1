<?php

require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class ClassView extends ConexionView{
    
    public function __construct(){
        parent::__construct();
    }

    function showClasses($classes) {

        $this->smarty->assign('count', count($classes)); 
        $this->smarty->assign('classes', $classes);
        $this->smarty->display('classList.tpl');
    }

    public function showFormClass($param, $id, $class){
        $this->smarty->assign('param', $param);
        $this->smarty->assign('class', $class);
        $this->smarty->assign('id', $id); 
        $this->smarty->display('formClass.tpl');
    } 


}