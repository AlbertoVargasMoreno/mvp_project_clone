<h1>Productos</h1>

<ul>
    <?php foreach($data['products'] as $product): ?>
        <li><?= $product["description"] ?></li>
    <?php endforeach; ?>
</ul>