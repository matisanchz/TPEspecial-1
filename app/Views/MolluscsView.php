<?php

    require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

    class MolluscsView {
        private $smarty;

        public function __construct() {
            $this->smarty = new Smarty();
        }

        function showClasses($classes) {

            $this->smarty->assign('count', count($classes)); 
            $this->smarty->assign('classes', $classes);
            $this->smarty->display('classList.tpl');
        }

        function showSubclasses($subclasses) {

            $this->smarty->assign('count', count($subclasses)); 
            $this->smarty->assign('subclasses', $subclasses);
            $this->smarty->display('subclassList.tpl');
        }

        function showSpecies($species) {

            $this->smarty->assign('count', count($species)); 
            $this->smarty->assign('species', $species);
            $this->smarty->display('specieList.tpl');
        }

    }
