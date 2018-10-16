<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Index: usuarios</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css" />
</head>
<body>
	<div class="container">
		<div class="header">
			<h1>PRODUCTO ELIMINADO</h1>
			
		</div>
		<section>
			
	<?php
     include ("../public/conexion_compra.php");
      $re=("DELETE FROM productos where id=".$_GET['id'])or 
                 die(mysql_error());
      $query=mysqli_query($conexion,$re); 
    
        ?>

  
      
   <div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
				
				<h3>REGISTRO ELIMINADO</h3>
				
				
				
				
				</div>
			</div>
		</div>
  
 	
		</section>
		<a href="../pag_producto.php" class="btn btn-success">Ir Atrás</a>
	</div>

	
</body>
</html>