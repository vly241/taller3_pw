<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Index: usuarios</title>
	<!-- Incluir Bootstrap -->
	<link rel="stylesheet" href="../css/bootstrap.min.css" />
	<!-- Incluir Fontawesome -->
	<link rel="stylesheet" href="../css/fontawesome.min.css" />
</head>
<body>
	<div class="container">
		<div class="header">
			<h1>USUARIO ELIMINADO</h1>
			
		</div>
		<section>
			
	<?php
     include ("../public/conexion_compra.php");
      $re=("DELETE FROM login where id=".$_GET['id'])or 
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
		<a href="../pag_usuario.php" class="btn btn-success">Ir Atrás</a>
	</div>

	<!-- Incluir Jquery -->
	<script src="js/jquery.min.js"></script>
	<!-- Incluir Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Incluir Fontawesome -->
	<script src="js/fontawesome.min.js"></script>
</body>
</html>