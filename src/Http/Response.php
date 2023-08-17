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

            // Ej home, se guarda en la variable $content
            // $content se imprime dentro de la plantilla layout.php
            $content = file_get_contents(viewPath($view));

            // uso de helpers
            // require __DIR__ . "/../../Views/template.php";
            require viewPath('template');
        } 

    }

?>