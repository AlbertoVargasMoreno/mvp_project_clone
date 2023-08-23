<h1>Create</h1>
<p>A form for add a new resource</p> 

<form action="store" method="post">

    <div class="input-group">
        <label for="description">Description</label>
        <input type="text" name="description" id="description">
    </div>

    <div class="input-group">
        <label for="category">Category</label>
        <input type="text" name="category" id="category">
    </div>

    <div class="input-group">
        <label for="available">Available</label>
        <input type="checkbox" name="available" value="1">
    </div>

    <div class="button-container">
        <button class="button-link" type="submit">Save</button>
    </div>

</form>

<a href="./">« Volver</a>