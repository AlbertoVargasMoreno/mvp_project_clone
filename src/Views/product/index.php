<h1>Productos</h1>
<p>A list from all resources</p>

<form action="" method="get">
    <input type="text" name="q" placeholder="Buscar productos...">
    <button type="submit">Buscar</button>
</form>

<ul>
    <?php foreach($data as $product): ?>
        <li>
            <?= $product["description"] ?> 
            | <a href='./show/<?= $product["id"] ?>'>Detalle</a> 
            | <a href='./edit/<?= $product["id"] ?>'>Editar</a> 
            | <a href='./destroy/<?= $product["id"] ?>'>Eliminar</a>
        </li>
    <?php endforeach; ?>
</ul>

<a href="./create">+ Nuevo producto</a> |
<a href="../">Home</a>