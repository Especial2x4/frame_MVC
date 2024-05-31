
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

            // Verificar la segunda parte de la url que corresponde al índice 1 del array y hace referencia al método del controlador

            if(isset($url[1])){

                if(method_exists($this->controladorActual, $url[1])){

                    $this->metodoActual = $url[1];
                    unset($url[1]);
                }
            }

            // Para probar el método que se está ejecutando
            //echo $this->metodoActual;

            // Obtener los posibles parámetros
            $this->parametros = $url ? array_values($url) : [];

            // Llamar callbacks
            call_user_func_array([$this->controladorActual, $this->metodoActual], $this->parametros);

            
            

        }

        public function getUrl() {

            //echo $_GET['url'];

            if(isset($_GET['url'])){

                $url = rtrim($_GET['url'], '/'); // Segmenta la url por medio del delimitador '/'
                $url = filter_var($url, FILTER_SANITIZE_URL);
                $url = explode('/', $url);

                return $url; // todo el código anterior devuelve la url trozada en una especie de array
            }else{

                return $url[0] = $this->controladorActual; // en caso de que no se tipé una url, por defecto seteará el controlador por defecto en el primer índice del array
            }
        }



    } 


?>