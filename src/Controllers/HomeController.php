<?php

    namespace App\Controllers;

    class HomeController{
        public function viewIndex()
        {
            // echo "Estás en Home";
            // print_r("tesssst");
            return view('home');
        }
    }

?>