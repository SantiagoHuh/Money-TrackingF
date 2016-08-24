<h2>Add category</h2>

<form action="<?php echo APP_URL; ?>categories/add" method="POST">
	<p>
		<label for="name">Name: </label>
		<input type="text" name="name">
	</p>

	<p>
		<input type="submit" value="Save">
	</p>
</form>
<br>
<form action="<?php echo APP_URL; ?>categories/index">
  <input type="submit" value="Ver datos">
</form>