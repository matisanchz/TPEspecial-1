<?php
    require_once './app/Controllers/MolluscsController.php';
    require_once './app/Controllers/AdminController.php';
    require_once './templates/form_alta.php';

    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    $action = 'home'; // acción por defecto
    if (!empty($_GET['action'])) {
        $action = $_GET['action'];
    }

    // parsea la accion Ej: dev/juan --> ['dev', juan]
    $params = explode('/', $action);

    // instancio el unico controller que existe por ahora
    $MolluscsController = new MolluscsController();
    $AdminController = new AdminController();

    // tabla de ruteo
    switch ($params[0]) {
        case 'home':
            showHome();
            break;
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

