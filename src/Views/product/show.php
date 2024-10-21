<header>
    <a href="../">« Volver</a>
    <h1>Show</h1>
    <p>Detail from the resource</p>
</header>

<section>
    <ul>
        <li>Id:&emsp;&emsp;&emsp;&emsp;&emsp;<?= $data["id"] ?></li>
        <li>Description:&emsp;<?= $data["description"] ?></li>
        <li>Category:&emsp;&emsp;<?= $data["category"] ?></li>
        <li>Available:&emsp;&emsp;<?= $data["available"]?'&#10004;':'&#10008;' ?></li>
    </ul>
</section>
