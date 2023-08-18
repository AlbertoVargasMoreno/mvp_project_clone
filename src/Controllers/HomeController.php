<?php

    namespace App\Controllers;

    class HomeController{
        public function index()
        {
            // echo "Estás en Home";
            // print_r("tesssst");
            return view('home', null);
        }
    }

?>