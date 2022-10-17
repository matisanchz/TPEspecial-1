<?php

    require_once './app/Controllers/MainController.php';
    require_once './app/Controllers/ClassController.php';
    require_once './app/Controllers/SubclassController.php';
    require_once './app/Controllers/SpecieController.php';
    require_once './app/Controllers/AuthController.php';
    
    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    $action = 'home';
    if (!empty($_GET['action'])) {
        $action = $_GET['action'];
    }

    $params = explode('/', $action);

    switch ($params[0]) {
        case 'home':
            $MainController = new MainController();
            $MainController->showHome();
            break;
        case 'about':
            $MainController = new MainController();
            $MainController->showAbout();
            break;
        case 'login':
            $authController = new AuthController();
            $authController->showFormLogin();
            break;
        case 'validate':
            $authController = new AuthController();
            $authController->validateUser();
            break;
        case 'logout':
            $authController = new AuthController();
            $authController->logout();
            break;
        case 'Class':
            if(isset($params[1])&&!empty($params[1])){
                switch($params[1]){
                    case 'form':
                        $ClassController = new ClassController();
                        if(isset($params[3])){
                            $ClassController->showFormClass($params[2], $params[3]);
                        }
                        else{
                            $ClassController->showFormClass($params[2]);
                        }
                        break;
                    case 'add':
                        $ClassController = new ClassController();
                        $ClassController->addClass();
                        break;
                    case 'edit':
                        $ClassController = new ClassController();
                        $ClassController->editClass($params[2]);
                        break;
                    case 'confirm-delete':
                        $MainController = new MainController();
                        $MainController->showDelete($params[0], $params[2]);
                        break;
                    case 'delete':
                        $ClassController = new ClassController();
                        $ClassController->DeleteClass($params[0], $params[2]);
                        break;
                    default:
                        $MainController = new MainController();
                        $MainController->showError();
                        break;
                }
            }
            else{
                $ClassController = new ClassController();
                $ClassController->showClasses();
                break;
            }
            break;
        case 'Subclass':
            if(isset($params[1])&&!empty($params[1])){
                switch($params[1]){
                    case 'list':
                        $SubclassController = new SubclassController();
                        $SubclassController->showSubclasses($params[2]);
                        break;
                    case 'form':
                        $SubclassController = new SubclassController();
                        if(isset($params[3])){
                            $SubclassController->showFormSubclass($params[2], $params[3]);
                        }
                        else{
                            $SubclassController->showFormSubclass($params[2]);
                        }
                        break;
                    case 'add':
                        $SubclassController = new SubclassController();
                        $SubclassController->addSubclass();
                        break;
                    case 'edit':
                        $SubclassController = new SubclassController();
                        $SubclassController->editSubclass($params[1], $params[2]);
                        break;
                    case 'confirm-delete':
                        $MainController = new MainController();
                        $MainController->showDelete($params[0], $params[2]);
                        break;
                    case 'delete':
                        $SubclassController = new SubclassController();
                        $SubclassController->DeleteSubclass($params[0], $params[2]);
                        break;
                    default:
                        $MainController = new MainController();
                        $MainController->showError();
                        break;
                }
            }
            else{
                $SubclassController = new SubclassController();
                $SubclassController->showSubclasses();
                break;
            }
            break;
        case 'Specie':
            if(isset($params[1])&&!empty($params[1])){
                switch($params[1]){
                    case 'list':
                        $SpecieController = new SpecieController();
                        $SpecieController->showSpecies($params[2]);
                        break;
                    case 'form':
                        $SpecieController = new SpecieController();
                        if(isset($params[3])){
                            $SpecieController->showFormSpecie($params[2], $params[3]);
                        }
                        else{
                            $SpecieController->showFormSpecie($params[2]);
                        }
                        break;
                    case 'add':
                        $SpecieController = new SpecieController();
                        $SpecieController->addSpecie();
                        break;
                    case 'edit':
                        $SpecieController = new SpecieController();
                        $SpecieController->editSpecie($params[2]);
                        break;
                    case 'confirm-delete':
                        $MainController = new MainController();
                        $MainController->showDelete($params[0], $params[2]);
                        break;
                    case 'delete':
                        $SpecieController = new SpecieController();
                        $SpecieController->DeleteSpecie($params[0], $params[2]);
                        break;
                    case 'show':
                        $SpecieController = new SpecieController();
                        $SpecieController->showSpecie($params[2]);
                        break;
                    default:
                        $MainController = new MainController();
                        $MainController->showError();
                        break;
                }
            }
            else{
                $SpecieController = new SpecieController();
                $SpecieController->showSpecies();
                break;
            }
            break;
        default:
        $MainController = new MainController();
        $MainController->showError();
        break;
    }


