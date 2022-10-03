<?php
    require_once './app/Controllers/MolluscsController.php';
    require_once './app/Controllers/AdminController.php';

    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    $action = 'home';
    if (!empty($_GET['action'])) {
        $action = $_GET['action'];
    }

    $params = explode('/', $action);

    $MolluscsController = new MolluscsController();
    $AdminController = new AdminController();

    switch ($params[0]) {
        case 'home':
            $MolluscsController->showHome();
            break;
        case 'Class':
            if(isset($params[1])&&!empty($params[1])){
                switch($params[1]){
                    case 'form':
                        $AdminController->showFormClass($params[2], $params[3]);
                        break;
                    case 'add':
                        $AdminController->addClass();
                        break;
                    case 'edit':
                        $AdminController->editClass($params[2]);
                        break;
                    case 'confirm-delete':
                        $AdminController->showDelete($params[0], $params[2]);
                        break;
                    case 'delete':
                        $AdminController->DeleteClass($params[0], $params[2]);
                        break;
                    case 'Subclass':
                        if(isset($params[2])&&!empty($params[2])){
                            switch($params[2]){
                                case 'list':
                                    $MolluscsController->showSubclasses($params[3]);
                                    break;
                                case 'form':
                                    $AdminController->showFormSubclass($params[3], $params[4]);
                                    break;
                                case 'add':
                                    $AdminController->addSubclass();
                                    break;
                                case 'edit':
                                    $AdminController->editSubclass($params[2], $params[3]);
                                    break;
                                case 'confirm-delete':
                                    $param = $params[0]."/".$params[1];
                                    $AdminController->showDelete($param, $params[3]);
                                    break;
                                case 'delete':
                                    $AdminController->DeleteSubclass($params[1], $params[3]);
                                    break;
                                case 'Specie':
                                    if(isset($params[3])&&!empty($params[3])){
                                        switch($params[3]){
                                            case 'list':
                                                $MolluscsController->showSpecies($params[4]);
                                                break;
                                            case 'form':
                                                $AdminController->showFormSpecie($params[4], $params[5]);
                                                break;
                                            case 'add':
                                                $AdminController->addSpecie();
                                                break;
                                            case 'edit':
                                                $AdminController->editSpecie($params[4]);
                                                break;
                                            case 'confirm-delete':
                                                $param = $params[0]."/".$params[1]."/".$params[2];
                                                $AdminController->showDelete($param, $params[4]);
                                                break;
                                            case 'delete':
                                                $AdminController->DeleteSpecie($params[2], $params[4]);
                                                break;
                                            case 'show':
                                                $MolluscsController->showSpecie($params[2], $params[4]);
                                                break;
                                            // default:
                                            //     $MolluscsController->showError();
                                            //     break;
                                        }
                                    }
                                    // else{
                                    //     $MolluscsController->showSpecies();
                                    //     break;
                                    // }
                                // default:
                                //     $MolluscsController->showError();
                                //     break;
                            }
                        }
                        // else{
                        //     $MolluscsController->showSubclasses();
                        //     break;
                        // }
                    // default:
                    //     $MolluscsController->showError();
                    //     break;
                }
            }
            else{
                $MolluscsController->showClasses();
                break;
            }
    }

