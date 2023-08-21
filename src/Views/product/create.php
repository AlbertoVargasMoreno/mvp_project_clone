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
        <select name="available" id="available">
            <option value="0">Disabled</option>
            <option value="1" selected>Enabled</option>
        </select>
    </div>

    <div class="button-container">
        <button class="button-link" type="submit">Save</button>
    </div>

</form>