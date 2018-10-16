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
	
	 <div class="formulario">
           <center><h2>Registrar producto</h2></center>
            
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="form">
            <form class="form-horizontal" action="/action_page.php">
            
               <div class="form-group">
   
                 <label class="control-label col-sm-2" for="email">NOMBRE PRODUCTO:</label>
                 <div class="col-sm-10">
                   <input type="text" class="form-control" name="nombre" placeholder="nombre producto"required>
                 </div>
               </div>
  
              <div class="form-group">
   
                 <label class="control-label col-sm-2" for="email">DESCRIPCION:</label>
                 <div class="col-sm-10">
                   <input type="text" class="form-control" name="descripcion" placeholder="descripcion"required>
                 </div>
               </div>
               
                <div class="form-group">
   
                 <label class="control-label col-sm-2" for="email">IMAGEN:</label>
                 <div class="col-sm-10">
                   <input type="text" class="form-control" name="imagen" placeholder="nombre de la imagen ejemplo:limon.jpg"required>
                 </div>
               </div>
               
                <div class="form-group">
   
                 <label class="control-label col-sm-2" for="email">PRECIO:</label>
                 <div class="col-sm-10">
                   <input type="text" class="form-control" name="precio" placeholder="precio por unidad"required>
                 </div>
               </div>
  
  
   <?php if(!empty($error)): ?>
            <div class="mensaje">
                <?php echo $error; ?>
            </div>
            <?php endif; ?>
                
                <input class="btn btn-success" type="submit" value="Registrar">
                <a href="../pag_producto.php" class="btn btn-success">Ir Atrás</a>
  
</form>
       </form>     
            
          
            </div>
	<!-- Incluir Jquery -->
	<script src="js/jquery.min.js"></script>
	<!-- Incluir Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Incluir Fontawesome -->
	<script src="js/fontawesome.min.js"></script>
</body>
</html>