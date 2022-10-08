<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class AuthView extends ConexionView{
    
    public function __construct(){
        parent::__construct();
    }

    function showFormLogin($error = null) {
        $this->smarty->assign("error", $error);
        $this->smarty->display('formLogin.tpl');
    }
}
