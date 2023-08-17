<h1>Productos</h1>

<ul>
    <?php foreach($results as $result): ?>
        <li><?= $result["description"] ?></li>
    <?php endforeach; ?>
</ul>