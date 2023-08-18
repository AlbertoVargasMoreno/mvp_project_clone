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

        public function __construct(){
            $resource = $_GET["resource"] ?? "";
            $resource = explode("/", $resource);
            // site.test/ -> hace referencia a home
            // site.test/product -> hace referencia al controlador ProductController
            // site.test/product/index -> hace referencia al método a utilizar

            $this->segments = $resource == "" ? "/" : $resource;


            $this->setController();
            $this->setMethod();
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

        public function getController(){
            $controller = ucfirst($this->controller);
            return "App\Controllers\\{$controller}Controller";
        }

        public function getMethod(){
            return $this->method;
        }

        public function sendRequest(){

            $controller = $this->getController(); // App\Controllers\ProductController
            $method = $this->getMethod(); // index

            $response = call_user_func([
                new $controller,
                $method
            ]);
            
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