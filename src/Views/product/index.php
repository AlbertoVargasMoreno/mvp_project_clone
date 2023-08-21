<h1>Productos</h1>
<p>A list from all resources</p>

<ul>
    <?php foreach($data['resources'] as $product): ?>
        <li><?= $product["description"] ?> | <a href='./product/show/<?= $product["id"] ?>'>Detalle</a> | <a href='./product/edit/<?= $product["id"] ?>'>Editar</a> | <a href='./product/destroy/<?= $product["id"] ?>'>Eliminar</a> </li>
    <?php endforeach; ?>
</ul>

<a href="./product/create">Nuevo producto</a>