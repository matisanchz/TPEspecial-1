<?php
    require_once './app/Controllers/MolluscsController.php';
    require_once './app/Controllers/AdminController.php';
    require_once './templates/form_alta.tpl';

    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    $action = 'list';
    if (!empty($_GET['action'])) {
        $action = $_GET['action'];
    }

    $params = explode('/', $action);

    $MolluscsController = new MolluscsController();
    $AdminController = new AdminController();

    switch ($params[0]) {
        case 'list':
            $MolluscsController->showClasses();
            break;
        case 'list2':
            $MolluscsController->showSubclasses();
            break;
        case 'list3':
            $MolluscsController->showSpecies();
            break;
        case 'add':
            $AdminController->addClass();
            break;
        default:
            echo('404 Page not found');
            break;
    }

