<h1>Productos</h1>

<ul>
    <?php foreach($data['resources'] as $product): ?>
        <li><?= $product["description"] ?> | <a href='./show/<?= $product["id"] ?>'>Detalle</a> | <a href='./edit/<?= $product["id"] ?>'>Editar</a> | <a href='./remove/<?= $product["id"] ?>'>Eliminar</a> </li>
    <?php endforeach; ?>
</ul>

<a href="./new">Nuevo producto</a>