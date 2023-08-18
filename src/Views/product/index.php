<?php
 
use App\Controllers\ProductController;

    $product = new ProductController();
    $results = $product->index();

?>

<h1>Productos</h1>

<ul>
    <?php foreach($results as $result): ?>
        <li><?= $result["description"] ?></li>
    <?php endforeach; ?>
</ul>