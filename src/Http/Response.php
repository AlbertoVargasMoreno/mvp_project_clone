<?php

    namespace App\Http;

    class Response {

        // Por ahora va retornar un view, pero también puede ser un array, json, pdf...
        protected $view;

        public function __construct($view)
        {
            // Asigna el valor (home, services, contact), que vino como parámetro del controlador, a la propiedad protegida $view
            $this->view = $view;
        }

        public function getView(){
            return $this->view;
        }
        
        public function sendResponse(){

            $view = $this->getView();
            // $content = file_get_contents(viewPath($view));
            // require viewPath('template');

            ob_start(); // Inicia el almacenamiento en búfer de salida
            require viewPath($view); // Incluye el archivo de vista y ejecuta el código PHP
            $content = ob_get_clean(); // Obtiene y limpia el contenido del búfer
            require viewPath('template'); // Carga y ejecuta la plantilla, con el contenido dinámico en $content


        } 

    }

?>