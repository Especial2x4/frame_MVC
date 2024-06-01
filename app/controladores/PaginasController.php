<?php

class PaginasController extends Controlador {

    function __construct (){
        
        //echo "Controlador páginas cargado";
    }

    // Método de ejemplo
    public function index(){

        $this->cargarVista("paginas/inicio");
    }

    // Método de ejemplo
    public function getArticulos(){


    }

    // Método de ejemplo
    public function actualizarArticulo($idArticulo){

        echo $idArticulo;

    }





}




?>