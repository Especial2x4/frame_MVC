
<?php

// Mapea las url's ingresadas en el navegador
// 1 = Controlador/2 = Método/3 = Parámetro

    class Core {

        protected $controladorActual = "paginas";
        protected $metodoActual = "index";
        protected $parametros = [];

        public function __construct() {

            // Al instanciar un objeto Core se ejecuta predeterminadamente el método getUrl()
            $url = $this->getUrl();


        }

        public function getUrl() {

            echo $_GET['url'];
        }



    } 


?>