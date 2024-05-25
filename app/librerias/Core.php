
<?php

// En este archivo Core está la programación más importante que hace que las url funcionen
// Mapea las url's ingresadas en el navegador
// 1 = Controlador/2 = Método/3 = Parámetro

    class Core {

        protected $controladorActual = "PaginasController";
        protected $metodoActual = "index";
        protected $parametros = [];

        public function __construct() {

            // Al instanciar un objeto Core se ejecuta predeterminadamente el método getUrl()
            $url = $this->getUrl();
            print_r($this->getUrl());
            
            // Busca en la carpeta controladores si el controlador existe
            if(file_exists('app/controladores/' . ucwords($url[0]) . '.php')){

                // Si el controlador existe se setea por defecto
                $this ->controladorActual = ucwords($url[0]);
                unset($url[0]);
                
            }
            
            // Requerir el controlador
            //require_once 'C:/xampp/htdocs/frame_MVC/app/controladores/' . $this->controladorActual . '.php'; funciona
            require_once 'app/controladores/' . $this->controladorActual . '.php';
            $this->controladorActual = new $this->controladorActual; // Es importante
            
            

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