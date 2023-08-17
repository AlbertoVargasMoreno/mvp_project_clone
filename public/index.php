<?php

    require ("../vendor/autoload.php");

    use App\Http\Request;

    $request = new Request;
    $request -> sendRequest();
    
?>