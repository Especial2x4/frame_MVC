
<?php

// Mapea las url's ingresadas en el navegador
// 1 = Controlador/2 = Método/3 = Parámetro

    class Core {

        protected $controladorActual = "paginas";
        protected $metodoActual = "index";
        protected $parametros = [];

        public function __construct() {

            // Al instanciar un objeto Core se ejecuta predeterminadamente el método getUrl()
            //$url = $this->getUrl();
            print_r($this->getUrl());


        }

        public function getUrl() {

            //echo $_GET['url'];

            if(isset($_GET['url'])){

                $url = rtrim($_GET['url'], '/'); // Segmenta la url por medio del delimitador '/'
                $url = filter_var($url, FILTER_SANITIZE_URL);
                $url = explode('/', $url);

                return $url; // todo el código anterior devuelve la url trozada en una especie de array
            }
        }



    } 


?>