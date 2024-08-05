<?php 
include('connection.php');

$con = connection();

$sql = "SELECT * FROM usuarios";
$query =mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<title>Usuarios CRUD</title>
</head>
<body>
	<div class="users-form">
		<form action="insert_user.php" method="POST">
			<h1> hola, crear usuario</h1>
			<input type="text" name ="nombre" placeholder="nombre"> 
			<input type="text" name ="apellido" placeholder="apellido">
			<input type="text"name ="username" placeholder="username">
			<input type="text"name ="contraseña" placeholder="contraseña">
			<input type="text"name ="email" placeholder="email">
			
			<input type="submit"value ="agregar usuario">
		</form>
	</div>
	<div class="users-table">
		<h2>Usuarios registrados</h2>
		<table>
			<thead>
				<tr>
					<th>ID</th>
					<th>nombre</th>
					<th>apellido</th>
					<th>username</th>
					<th>contraseña</th>
					<th>email</th>

				</tr>
			</thead>
			<tbody>
				<?php while($row =mysqli_fetch_array($query)):?>
				<tr>	
					<th><?=$row['id']?></th>
					<th><?=$row['nombre']?></th>
					<th><?=$row['apellido']?></th>
					<th><?=$row['usuario']?></th>
					<th><?=$row['contraseña']?></th>
					<th><?=$row['email']?></th>

					<th><a href="update.php?id=<?=$row['id']?>"class="users-table--edit">editar</a></th>
					<th><a href="delete_user.php?id=<?=$row['id']?>"class="users-table--delete">eliminar</a></th>
				</tr>
				<?php endwhile;	?>
			</tbody>
		</table>
	</div>
</body>
</html>


