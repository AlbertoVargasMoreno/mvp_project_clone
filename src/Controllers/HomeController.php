<?php

    namespace App\Controllers;

    class HomeController{
        public function index()
        {
            // echo "Estás en Home";
            return view('home');
        }
    }

?>