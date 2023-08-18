<?php

    use App\Http\Response;

    if (! function_exists('view')) {
        function view($view, $data){
            return new Response($view, $data);
        }
    }

    if (! function_exists('viewPath')) {
        function viewPath($view){
            return __DIR__ . "/Views/$view.php";
        }
    }
?>