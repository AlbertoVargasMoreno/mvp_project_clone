<h1>Productos</h1>
<p>A list from all resources</p>

<!-- <form action="" method="get">
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
</div> -->

<!-- src="https://loremflickr.com/320/180/gadget?random=2"  -->
<!-- src="https://images.unsplash.com/photo-1618384887929-16ec33fab9ef?q=80&w=1480&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" -->

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