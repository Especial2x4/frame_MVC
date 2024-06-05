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

    





}




?>