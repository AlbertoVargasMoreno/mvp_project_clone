<?php
$sanitizedDesciption = htmlspecialchars($data["description"], ENT_QUOTES);
$sanitizedCategory = htmlspecialchars($data["category"], ENT_QUOTES);
?>

<h1>Show</h1>
<p>Detail from the resource</p> 

<ul>
    <li><?= $data["id"] ?></li>
    <li><?= $sanitizedDesciption ?></li>
    <li><?= $sanitizedCategory ?></li>
    <li><?= $data["available"] ?></li>
</ul>

<a href="../">« Volver</a>