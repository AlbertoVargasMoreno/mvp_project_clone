<h1>Products</h1>

<ul>
    <?php foreach($products as $product): ?>
        <li><?= $product["description"] ?></li>
    <?php endforeach; ?>
</ul>