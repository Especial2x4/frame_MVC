<?php

// Clase controlador principal
// se encarga de cargar los modelos y las vistas

class Controlador {

    function __construct() {

    }

    //Cargar modelo
    public function cargarModelo($modelo){
        //carga el archivo
        require_once "app/modelos" . $modelo . ".php";

        //instancia el modelo
        return new $modelo();
    }

    //Cargar vista
    public function cargarVista($vista , $datos=[]){

        $archivo = "app/vistas/" . $vista . ".php";
        //chequea si el archivo de vista existe
        if(file_exists($archivo)){
            require_once $archivo;
        }else{
            // si el archivo de vista no existe
            die("la vista no existe");
        }

    }







}









?>