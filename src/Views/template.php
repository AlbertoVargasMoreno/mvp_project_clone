<?php //session_start(); 
    // var_dump($_SERVER['HTTP_HOST']);
    // var_dump($_SERVER['REQUEST_URI']);
    $serverHost = $_SERVER['HTTP_HOST'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVP Project</title>
    <link rel="icon" href="data:;base64,iVBORw0KGgo=">
    <link rel="stylesheet" href="http://<?=$serverHost;?>/mvp_project/public/assets/css/normalize.slim.css">
    <link rel="stylesheet" href="http://<?=$serverHost;?>/mvp_project/public/assets/css/base.css">
    <link rel="stylesheet" href="http://<?=$serverHost;?>/mvp_project/public/assets/css/form.css">
    <link rel="stylesheet" href="http://<?=$serverHost;?>/mvp_project/public/assets/css/card.css">
    <link rel="stylesheet" href="http://<?=$serverHost;?>/mvp_project/public/assets/css/button.css">
    <link rel="stylesheet" href="http://<?=$serverHost;?>/mvp_project/public/assets/css/index.css">
    <!-- esta solucion no funciona, cuando se accede a traves de otro dispositivo, es necesario resolver como enlazar los public assets -->
</head>
<body>
    <main>
        <?= $content; ?>
    </main>
</body>
</html>