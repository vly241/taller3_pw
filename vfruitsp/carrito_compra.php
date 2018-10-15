<?php
 session_start();

 include './public/conexion_compra.php';

 if(isset($_SESSION['carrito'])){
  if(isset($_GET['id'])){
    $arreglo=$_SESSION['carrito'];
    $encontro=false;
    $numero=0;
    for($i=0;$i<count($arreglo);$i++){
     if($arreglo[$i]['Id']==$_GET['id']){
      $encontro=true;
      $numero=$i;
     }
    }
    if($encontro==true){
     $arreglo[$numero]['Cantidad']=$arreglo[$numero]['Cantidad']+1;
     $_SESSION['carrito']=$arreglo;
    }else{
     $nombre="";
     $precio=0;
     $imagen="";
     $re=mysqli_query($conexion,"select * from productos where id=".$_GET['id']);
     while ($f=mysqli_fetch_array($re)) {
      $nombre=$f['nombre'];
      $precio=$f['precio'];
      $imagen=$f['imagen'];
     }
     $datosNuevos=array('Id'=>$_GET['id'],
         'Nombre'=>$nombre,
         'Precio'=>$precio,
         'Imagen'=>$imagen,
         'Cantidad'=>1);

     array_push($arreglo, $datosNuevos);
     $_SESSION['carrito']=$arreglo;
    }

   }

 }else{
  if(isset($_GET['id'])){
   $nombre="";
   $precio=0;
   $imagen="";
   $re=mysqli_query($conexion,"select * from productos where id=".$_GET['id']);
   while ($f=mysqli_fetch_array($re)) {
    $nombre=$f['nombre'];
    $precio=$f['precio'];
    $imagen=$f['imagen'];
   }
   $arreglo[]=array('Id'=>$_GET['id'],
       'Nombre'=>$nombre,
       'Precio'=>$precio,
       'Imagen'=>$imagen,
       'Cantidad'=>1);
   $_SESSION['carrito']=$arreglo;
  }
 }
     
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title>Carrito de Compras</title>
   <link rel="stylesheet" type="text/css" href="./css/compras.css">
 <script type="text/javascript"  href="./js/scripts.js"></script>
</head>
<body>
 <header>
  <h1>Carrito de Compras</h1>
  <a href="./carrito_compra.php" title="ver carrito de compras">
   <img src="./img/c.png">
  </a>
 </header>
 <section>
  <?php
   $total=0;
   if(isset($_SESSION['carrito'])){
   $datos=$_SESSION['carrito'];

   $total=0;
   for($i=0;$i<count($datos);$i++){
 ?>
    <div class="producto">
     <center>
      <img src="./productos/<?php echo $datos[$i]['Imagen'];?>"><br>
      <span><?php echo $datos[$i]['Nombre'];?></span><br>
      <span>Precio: <?php echo $datos[$i]['Precio'];?></span><br>
      <span>Cantidad <input type="text" value="<?php echo $datos[$i]['Cantidad'];?>"></span><br>
      <span>Subtotal:<?php echo $datos[$i]['Cantidad']*$datos[$i]['Precio'];?></span><br>

     </center>
    </div>
  <?php
   $total=($datos[$i]['Cantidad']*$datos[$i]['Precio'])+$total;
  }
   }else{
    echo '<center><h2>No has añadido ningun producto</h2></center>';
   }

   echo '<center><h2>Total: '.$total.'</h2></center>';

  ?> 
  <center><a href="pag_producto.php">Ver catalogo</a></center>
 </section>
</body>
</html>