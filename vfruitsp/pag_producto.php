<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Carrito de Compras</title>
	<link rel="stylesheet" type="text/css" href="./css/compras.css">
	<!-- Incluir Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<!-- Incluir Fontawesome -->
	<link rel="stylesheet" href="css/fontawesome.min.css" />
</head>
<body>
	<header>
	     
		<h1>Carrito De Compras</h1>
		
		<a href="./carrito_compra.php" title="ver carrito de compras">
			<img src="img/c.png">
		</a>
	</header>
	<center><a href="./producto/registro_prod.php" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Añadir Nuevo usuario</a>
	<a href="principal.php" class="btn btn-success">Ir Atrás</a>
	</center>
		
	<section>
		
	<?php
     include ("public/conexion_compra.php");
     $consulta="select * from productos";
     $query=mysqli_query($conexion, $consulta); 
     while ($f=mysqli_fetch_array($query,MYSQLI_ASSOC)) {
  ?>

   <div class="producto">
   <center>
    <img src="./productos_img/<?php echo $f['imagen'];?>"><br>
    <span><?php echo $f['nombre'];?></span><br>
    
    <a class='btn btn-primary' href="./producto/detalles.php?id=<?php  echo $f['id'];?>"><i class='fa fa-search'></i> Ver</a>

				<a class='btn btn-warning' href='edit.php'><i class='fa fa-edit'></i> Editar</a>
				<a class='btn btn-danger' href='./producto/eliminar_producto.php?id=<?php  echo $f['id'];?>'><i class='fa fa-trash'></i> Eliminar</a>
    </center>
  </div>
 <?php
  }
 ?>
		
	

		
	</section>
	<!-- Incluir Jquery -->
	<script src="js/jquery.min.js"></script>
	<!-- Incluir Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Incluir Fontawesome -->
	<script src="js/fontawesome.min.js"></script>
</body>
</html>