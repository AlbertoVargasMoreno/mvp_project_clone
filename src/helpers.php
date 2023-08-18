<?php

    use App\Http\Response;

    if (! function_exists('view')) {
        function view($view, $data){
            // echo "<pre>";
            // print_r($view);
            // print_r($data);
            return new Response($view, $data);
        }
    }

    if (! function_exists('viewPath')) {
        function viewPath($view, $data){
            return __DIR__ . "/Views/$view.php";
        }
    }
?>