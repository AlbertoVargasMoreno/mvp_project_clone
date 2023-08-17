<?php

    use App\Http\Response;

    if (! function_exists('view')) {
        function view($view){
            return new Response($view);
        }
    }

    if (! function_exists('viewPath')) {
        function viewPath($view){
            // return "/../../Views/$view.php";
            return __DIR__ . "/Views/$view.php";
        }
    }
?>