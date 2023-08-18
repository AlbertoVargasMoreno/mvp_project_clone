<?php

    namespace App\Http;

    class Response {

        // Por ahora va retornar un view, pero también puede ser un array, json, pdf...
        protected $view;
        protected $data = [];

        public function __construct($view, $data)
        {
            // Asigna el valor (home, services, contact), que vino como parámetro del controlador, a la propiedad protegida $view
            $this->view = $view;
            $this->data = $data;

            // echo "<pre>";
            // print_r($view);
            // print_r($data);
        }

        public function getView(){
            return $this->view;
        }

        public function getData(){
            return $this->data;
        }
        
        public function sendResponse(){

            $view = $this->getView();
            $data = $this->getData();

            // echo "<pre>";
            // print_r($view);
            // print_r($data);

            // $content = file_get_contents(viewPath($view));
            // require viewPath('template');

            ob_start(); // Inicia el almacenamiento en búfer de salida
            require viewPath($view, $data); // Incluye el archivo de vista y ejecuta el código PHP
            $content = ob_get_clean(); // Obtiene y limpia el contenido del búfer
            require viewPath('template', $data); // Carga y ejecuta la plantilla, con el contenido dinámico en $content


        } 

    }

?>