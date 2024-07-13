<?php
    require_once 'config/config.php';
    require_once 'helpers/Funciones.php';
    //CAPTURA LA URL ACTUAL
    $currentPageUrl = $_SERVER['REQUEST_URI'];
    //VERIFICAR SI EXISTE LA RUTA ADMIN
    $isAdmin = strpos($currentPageUrl, '/' . ADMIN) !== false;
    //COMPROBAR SI EXISTE GET PARA CREAR URL
    $ruta = empty($_GET['url']) ? 'principal/index' : $_GET['url'];
    //CREAR UN ARRAY A PARTIR DE LA RUTA
    $array = explode('/', $ruta);
    //VALIDAR SI NOS ENCONTRAMOS EN LA RUTA
    if ($isAdmin && (count($array) == 1 || (count($array) == 2 && empty($array[1]))) && $array[0] == ADMIN) {
        //CREAR CONTROLADOR
        $controler = 'Admin';
        $metodo = 'login';
    } else {
        $indiceUrl = ($isAdmin) ? 1 : 0 ;
        $controler = ucfirst($array[$indiceUrl]);
        $metodo = 'index';
    }
    
    //VALIDAR METODOS
    $metodoUrl = ($isAdmin) ? 2 : 1 ;
    if (!empty($array[$metodoUrl]) && $array[$metodoUrl] != '') {
        $metodo = $array[$metodoUrl];
    }

    //VALIDAR PARAMETRO
    $parametro = '';
    $parametroUrl = ($isAdmin) ? 3 : 2 ;
    if (!empty($array[$parametroUrl]) && $array[$parametroUrl] != '') {
        for ($i = $parametroUrl; $i < count($array); $i++) { 
            $parametro .= $array[$i] . ',';
        }
        $parametro = trim($parametro, ',');
    }

    //LLAMAR AUTOLOAD
    require_once 'config/app/Autoload.php';

    //VALIDAR DIRECTORIO DE CONTROLADORES
    $dirControler = ($isAdmin) ? 'controllers/admin/' . $controler . '.php' : 'controllers/principal/' . $controler . '.php';
    if (file_exists($dirControler)) {
        require_once $dirControler;
        $controler = new $controler();
        if (method_exists($controler, $metodo)) {
            $controler->$metodo($parametro);
        } else {
            echo "Metodo no existe";
        }  
    }else {
        echo "Controlador no existe";
    }
?>