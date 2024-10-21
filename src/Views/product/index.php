<header>
  <a href="../">« Home</a>
  <h1>Productos</h1>
  <p>A list from all resources</p>
  
  <!-- <form action="" method="get">
      <input type="text" name="q" placeholder="Buscar productos...">
      <button type="submit">Buscar</button>
  </form>
  -->
  
<div class="flex container-create-btn">
  <a href="./create" class="button primary round icon-button expand-button">+ Nuevo producto</a>
</div>
</header>

<section class="cards">
    <?php foreach($data as $product): ?>
        <div class="card"> 
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

