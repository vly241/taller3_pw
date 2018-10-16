<?php session_start();

    

    
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $imagen = $_POST['imagen'];
        $precio = $_POST['precio'];
       
        
       
        
        $error = '';
        
        if (empty($nombre) or empty($descripcion) or empty($imagen) or empty($precio)){
            
            $error .= '<i>Favor de rellenar todos los campos</i>';
        }else{
            	require_once '../public/conexion.php';
            
            $statement = $conexion->prepare('SELECT * FROM productos WHERE nombre = :nombre LIMIT 1');
            $statement->execute(array(':nombre' => $nombre));
            $resultado = $statement->fetch();
            
                        
            if ($resultado != false){
                $error .= '<i>Este producto ya existe</i>';
            }
            
           
            
        }
        
        if ($error == ''){
            $statement = $conexion->prepare('INSERT INTO productos (id, nombre, descripcion, imagen, precio) VALUES (null, :nombre, :descripcion, :imagen, :precio)');
            $statement->execute(array(
                
                ':nombre' => $nombre,
                ':descripcion' => $descripcion,
                ':imagen' => $imagen,
                ':precio'=> $precio,
            ));
            
            $error .= '<i style="color: green;">producto registrado exitosamente</i>';
        }
    }


    require '../front/producto_reg.php';

?>