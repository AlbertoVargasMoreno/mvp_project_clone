<h3>Edit</h3>
<p>A form for edit an existence resource</p> 

<form action="update" method="post">

    <input type="hidden" name="id" value="<?= $data["resources"]["id"] ?>">

    <div class="input-group">
        <label for="description">Description</label>
        <input type="text" name="description" id="description" value="<?= $data["resources"]["description"] ?>">
    </div>

    <div class="input-group">
        <label for="category">Category</label>
        <input type="text" name="category" id="category" value="<?= $data["resources"]["category"] ?>">
    </div>

    <div class="input-group">
        <label for="available">Available</label>
        <input type="checkbox" name="available" value="1" <?= ($data["resources"]["available"] == 1) ? 'checked' : '' ?>>
    </div>

    <div class="button-container">
        <button class="button-link" type="submit" name="save_button">Save</button>
    </div>

</form>