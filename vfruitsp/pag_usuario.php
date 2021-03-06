<?php session_start();

        
	
	$where = "";
	
	if(!empty($_POST))
	{
		$valor = $_POST['campo'];
		if(!empty($valor)){
			$where = "WHERE apellido LIKE '%$valor'";
		}
	}
	
	
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Index: usuarios</title>
	<!-- Incluir Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<!-- Incluir Fontawesome -->
	<link rel="stylesheet" href="css/fontawesome.min.css" />
	<link href="css/bootstrap-theme.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="header">
			<h1>Listado de usuarios</h1>
			<a href="cerrar_registro.php" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Añadir Nuevo usuario</a>
			<div class="row">
				
				
				<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
					<b>Nombre: </b><input type="text" id="campo" name="campo" />
					<input type="submit" id="enviar" name="enviar" value="Buscar" class="btn btn-info" />
				</form>
			</div>
		</div>
		<section>
			<table class="table table-bordered">
				<tr>
					<th>Id</th>
					<th>USUARIO</th>
					<th>NOMBRE Y APELLIDO</th>
					
					<th>OPCIONES</th>
				</tr>
						
	<?php
     include ("public/conexion_compra.php");
     $consulta="select * from login";
     $query=mysqli_query($conexion, $consulta); 
     while ($f=mysqli_fetch_array($query,MYSQLI_ASSOC)) {
  ?> 
    
 <tr>
		<td><?php echo $f['id'] ?></td>
		<td><?php echo $f['usuario'] ?></td>
		<td><?php  echo $f['apellido']?></td>
		
		<td>
				<a class='btn btn-primary' href="./usuario/mostrar_usuarios.php?id=<?php  echo $f['id'];?>"><i class='fa fa-search'></i> Ver</a>

				<a class='btn btn-warning' href='./usuario/editar_usuarios.php?id=<?php  echo $f['id'];?>'><i class='fa fa-edit'></i> Editar</a>
				<a class='btn btn-danger' href='./usuario/eliminar_usuarios.php?id=<?php  echo $f['id'];?>'><i class='fa fa-trash'></i> Eliminar</a>
			</td>
		</tr>
 <?php
  }
 ?>
	
			</table>
		</section>
		<a href="principal.php" class="btn btn-success">Ir Atrás</a>
	</div>

	<!-- Incluir Jquery -->
	<script src="js/jquery.min.js"></script>
	<!-- Incluir Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Incluir Fontawesome -->
	<script src="js/fontawesome.min.js"></script>
</body>
</html>