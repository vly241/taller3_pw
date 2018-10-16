<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Carrito de Compras</title>
	<link rel="stylesheet" type="text/css" href="../css/compras.css">
	  	<link rel="stylesheet" href="../css/bootstrap.min.css" />
</head>
<body>
	<header>
	     
		<h1>Carrito De Compras</h1>
		<a href="../carrito_compra.php" title="ver carrito de compras">
			<img src="../img/c.png">
		</a>
	</header>
	<section>
		
	<?php
     include ("../public/conexion_compra.php");
      $re=("select * from productos where id=".$_GET['id'])or 
                 die(mysql_error());
      $query=mysqli_query($conexion,$re); 
      while ($f=mysqli_fetch_array($query,MYSQLI_ASSOC)){
   
        ?>

  
      
   <center>
    <img src="../productos_img/<?php echo $f['imagen'];?>"><br>
    <span><?php echo $f['nombre'];?></span><br>
     <span>precio:<?php echo $f['precio'];?></span><br>
    <a class="btn btn-success" href="../carrito_compra.php?id=<?php  echo $f['id'];?>">añadir al carrito</a>
    <a href="../pag_producto.php" class="btn btn-success">Ir Atrás</a>
    </center>
  
 
 
   
 
 <?php
  }
 
     ?>
		
		

		
	</section>
	<script type="text/javascript"  href="./js/scripts.js"></script>
</body>
</html>