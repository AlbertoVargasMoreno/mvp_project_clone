<h1>Productos</h1>
<p>A list from all resources</p>

<!-- <form action="" method="get">
    <input type="text" name="q" placeholder="Buscar productos...">
    <button type="submit">Buscar</button>
</form>
-->

<a href="./create" class="button primary round icon-button expand-button">+ Nuevo producto</a> 

<section class="cards">
    <?php foreach($data as $product): ?>
        <div class="card"> 
            <img class="card-media" 
            src="https://images.unsplash.com/photo-1615663245857-ac93bb7c39e7?q=80&w=1530&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
             />
            <div class="card-content">
                <?= $product["description"] ?>
                <div>
                    | <a href='./show/<?= $product["id"] ?>' class="card-link">Detalle</a> 
                    | <a href='./edit/<?= $product["id"] ?>' class="card-link">Editar</a> 
                    | <a href='./destroy/<?= $product["id"] ?>' class="card-link">Eliminar</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</section>

|
<a href="../">Home</a>