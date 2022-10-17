<?php

require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class SpecieView extends ConexionView{
    
    public function __construct(){
        parent::__construct();
    }
    
    public function showSpecie($specie){
        $this->smarty->assign('specie', $specie); 
        $this->smarty->display('specie.tpl');
    }

    public function showCUError($photo=null){
        $this->smarty->assign('photo', $photo); 
        $this->smarty->display('deny.tpl');
    }

    function showSpecies($species) {
        $this->smarty->assign('count', count($species)); 
        $this->smarty->assign('species', $species);
        $this->smarty->display('specieList.tpl');
    }

    public function showFormSpecie($param, $id, $subclasses){
        $this->smarty->assign('param', $param);
        $this->smarty->assign('id', $id);
        $this->smarty->assign('subclasses', $subclasses);
        $this->smarty->display('formSpecie.tpl');
    } 

}