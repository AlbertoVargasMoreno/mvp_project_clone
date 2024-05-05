<h1>Productos</h1>
<p>A list from all resources</p>

<form action="" method="get">
    <input type="text" name="q" placeholder="Buscar productos...">
    <button type="submit">Buscar</button>
</form>
<div class="card">
  <img class="card-media" src="https://picsum.photos/320/180" />
  <div class="card-content">
    <h5 class="card-title">Card title</h5>
    <p>
      Card text. Basic example of some text content inside a card. Wow, look at
      this great text.
    </p>
    <button class="card-action primary">Card action</button>
  </div>
</div>

<!-- src="https://loremflickr.com/320/180/gadget?random=2"  -->
<section>
    <?php foreach($data as $product): ?>
        <div class="card"> 
            <img class="card-media" 
             />
            <div class="card-content">
                <?= $product["description"] ?> 
            </div>
            | <a href='./show/<?= $product["id"] ?>' class="card-link">Detalle</a> 
            | <a href='./edit/<?= $product["id"] ?>' class="card-link">Editar</a> 
            | <a href='./destroy/<?= $product["id"] ?>' class="card-link">Eliminar</a>
        </div>
    <?php endforeach; ?>
</section>

<a href="./create">+ Nuevo producto</a> |
<a href="../">Home</a>