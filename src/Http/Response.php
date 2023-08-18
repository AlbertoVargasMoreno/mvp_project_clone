<?php

    namespace App\Http;

    class Response {

        // Por ahora va retornar un view, pero también puede ser un array, json, pdf...
        protected $view;
        protected $data = [];

        public function __construct($view, $data){
            $this->view = $view; // Asigna el valor (home, services, contact)
            $this->data = $data; // Los datos que vienen de la base de datos o formularios
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

            ob_start(); // Inicia el almacenamiento en búfer de salida
            require viewPath($view, $data); // Incluye el archivo de vista y ejecuta el código PHP
            $content = ob_get_clean(); // Obtiene y limpia el contenido del búfer
            require viewPath('template', $data); // Carga y ejecuta la plantilla, con el contenido dinámico en $content


        } 

    }

?>