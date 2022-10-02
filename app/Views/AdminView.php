<?php

    require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

    class AdminView {
        private $smarty;

        public function __construct() {
            $this->smarty = new Smarty();
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

        public function showFormClass($param, $id){
            $this->smarty->assign('param', $param);
            $this->smarty->assign('id', $id); 
            $this->smarty->display('formClass.tpl');
        } 

        public function showFormSubclass($param, $id){
            $this->smarty->assign('param', $param);
            $this->smarty->assign('id', $id);
            $this->smarty->display('formSubclass.tpl');
        } 

        public function showFormSpecie($param, $id){
            $this->smarty->assign('param', $param);
            $this->smarty->assign('id', $id);
            $this->smarty->display('formSpecie.tpl');
        } 

    }
