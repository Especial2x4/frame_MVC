
<?php

// Carga librerias
//require_once "librerias/Base.php";
//require_once "librerias/Controlador.php";
//require_once "librerias/Core.php";

//echo "HOLA MUNDO desde el INICIADOR";

// Cargando los archivos necesarios con Autoloader

spl_autoload_register(function($nombreClase){

    require_once 'librerias/' . $nombreClase . '.php';

});



?>