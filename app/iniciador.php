<?php


//Cargamos librerias
require_once 'config/configurar.php';
require_once 'helpers/url_helper.php';

//Autocargar librerias
spl_autoload_register(function($nombreClase){
    require_once 'librerias/'. $nombreClase .'.php';
} );
//require_once 'librerias/Base.php';
//require_once 'librerias/Core.php';
//require_once 'librerias/Controlador.php';


?>