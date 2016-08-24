<h2>Edita la categoria</h2>
<form action="<?php echo APP_URL; ?>categories/edit" method="POST">
    <input type="hidden" name="id" value="<?php echo $category['id']; ?>">
    <p><label for="id">id: <?php echo $category['id']; ?></label></p>
    <p><label for="new_name">Nombre de la Categoria Nueva:</label>
    <input type="text" name="new_name"></p>
    <p><input type="submit" value="update"></p>
</form>
