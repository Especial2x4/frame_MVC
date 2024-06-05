<?php

class ArticulosController extends Controlador {

    function __construct (){
        
        echo "Controlador artículos cargado";
    }

    // Método de ejemplo
    public function getArticulos(){

        $datos_asoc = [
            'description'=> 'Acá iria el mapeo de los datos traidos desde la Database'
        ];

        $this->cargarVista("paginas/articulos", $datos_asoc);
    }

    // Método de ejemplo
    public function actualizarArticulo($idArticulo){

        echo $idArticulo;

    }





}




?>