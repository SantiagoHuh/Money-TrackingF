<h2>Listado de Usuarios</h2>

<table border="2">
	<tr>
		<th bgcolor="#04B4AE">ID</th>
		<th bgcolor="#04B4AE">Username</th>
		<th bgcolor="#04B4AE">Rol</th>
		<th bgcolor="#04B4AE">Action</th>
	</tr>
<?php foreach ($users as $user): ?> 
	<tr>
		<td bgcolor="#848484"><strong><?php echo $user["id"]; ?></strong></td>
		<td><?php echo $user["username"]; ?></td>
		<td><?php echo $user["rol"]; ?></td>
		<td>
			<a href="<?php echo APP_URL; ?>users/edit/<?php echo $user["id"]; ?>">Edit</a>
			<a href="<?php echo APP_URL; ?>users/delete/?id=<?php echo $user["id"]; ?>">Delete</a>
		</td>
	</tr>
<?php endforeach; ?>
</table>
<br>
<form action="<?php echo APP_URL; ?>users/add">
      <input type="submit" value="Nuevo Usuario">
  </form>