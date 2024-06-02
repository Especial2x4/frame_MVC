<?php

class PaginasController extends Controlador {

    function __construct (){
        
        //echo "Controlador páginas cargado";
    }

    // Método de ejemplo
    public function index(){

        // prueba de pasar datos desde el controlador a la vista más adelante será útil para traer desde la base de datos hacia la vista
        $datos_asoc = [
            'titulo' => 'El mejor del siglo'
        ];

        $this->cargarVista("paginas/inicio", $datos_asoc);
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