<?php

    namespace App\Http;

    use App\Http\Response;

    class Request {

        // Segmentos de la url
        protected $segments = [];
        // De qué controlador requiere el usuario
        protected $controller;
        // Con qué método vamos a responder
        protected $method;
        // Parámetro dependiendo del método
        protected $param;

        public function __construct(){

            // site.test/ -> hace referencia a home
            // site.test/product -> hace referencia al controlador ProductController
            // site.test/product/index -> hace referencia al método a utilizar
            // site.test/product/show/1 -> hace referencia al id con cual va a trabajar

            $this->segments = explode('/',$_SERVER['QUERY_STRING']);

            $this->setController();
            $this->setMethod();
            $this->setParam();
        }

        public function setController(){
            $this->controller = empty($this->segments[0])
                ? 'home'
                : $this->segments[0];
        }

        public function setMethod(){
            if (empty($this->segments[1]))
                $this->method = 'index';
            else
                $this->method = $this->segments[1]; 
        }

        public function setParam(){
            if (empty($this->segments[2]))
                $this->param = null;
            else
                $this->param = $this->segments[2]; 
        }

        public function getController(){
            $controller = ucfirst($this->controller);
            return "App\Controllers\\{$controller}Controller";
        }

        public function getMethod(){
            return $this->method;
        }

        public function getParam(){
            return $this->param;
        }

        public function sendRequest(){

            $controller = $this->getController(); // App\Controllers\ProductController
            $method = $this->getMethod(); // index     show     edit
            $param = $this->getParam(); // 1...n

            // $response = call_user_func([
            //     new $controller,
            //     $method
            // ]);

            // Cambiamos call_user_func por call_user_func_array, porque necesitamos enviar parámetros en algunos métodos
            $response = call_user_func_array([new $controller(), $method], [$param]);

            try {

                if ($response instanceof Response) {
                    $response->sendResponse();
                } else {
                    throw new \Exception("Error Processing Request", 1); 
                }
                
            } catch (\Throwable $e) {
                die (" Details: {$e->getMessage()}");
            }

        }


    }

?>