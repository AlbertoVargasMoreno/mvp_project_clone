<?php
session_start();
if (isset($_SESSION['name'])) $sanitizedName = htmlspecialchars($_SESSION['name']);
?>
<div class="col-8">
    <h1>Página Home</h1>
    <?php if (isset($_SESSION['name'])): ?>
    <p>Bienvenid@ <?= $sanitizedName; ?></p>
    <?php endif; ?>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam numquam voluptates deleniti molestias quas facilis laboriosam quisquam tempora dolor autem!</p>
    <a href="product/">Products</a> | 
    <?php if (!isset($_SESSION['email'])): ?>
        <a href="user/login">Login</a> 
    <?php else: ?>
        <a href="user/logout">Logout</a> 
    <?php endif; ?>
</div>