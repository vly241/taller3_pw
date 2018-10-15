<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>usuario</title>
	<!-- Incluir Bootstrap -->
	<link rel="stylesheet" href="../css/bootstrap.min.css" />
	<!-- Incluir Fontawesome -->
	<link rel="stylesheet" href="../css/fontawesome.min.css" />
	
</head>
<body>
	
	<section>
		
	<?php
     include ("../public/conexion_compra.php");
      $re=("select * from login where id=".$_GET['id'])or 
                 die(mysql_error());
      $query=mysqli_query($conexion,$re); 
      while ($f=mysqli_fetch_array($query,MYSQLI_ASSOC)){
   
        ?>

  
      
   <center>
    <h1><?php echo $f['apellido']?></h1>
    <span>usuario:  <?php echo $f['usuario']?></span><br>
     <span>correo electronico:  <?php echo $f['correo']?></span><br>
      <span>clave:  <?php echo $f['clave']?></span><br>
    

    </center>
  
 

   
 
 <?php
  }
 
     ?>
		
		
 <a href="../pag_usuario.php" class="btn btn-success">Ir Atrás</a>
		
	</section>
	<script type="text/javascript"  href="../js/jquery.min.js"></script>
</body>
</html>