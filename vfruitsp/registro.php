<?php session_start();

    if(isset($_SESSION['usuario'])) {
        header('location: index.php');
    }

    
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $correo = $_POST['correo'];
        $usuario = $_POST['usuario'];
        $apellido = $_POST['apellido'];
        $clave = $_POST['clave'];
        $clave2 = $_POST['clave2'];
        
        $clave = hash('sha512', $clave);
        $clave2 = hash('sha512', $clave2);
        
        $error = '';
        
        if (empty($correo) or empty($usuario) or empty($clave) or empty($clave2)){
            
            $error .= '<i>Favor de rellenar todos los campos</i>';
        }else{
            	require_once 'public/conexion.php';
            
            $statement = $conexion->prepare('SELECT * FROM login WHERE usuario = :usuario LIMIT 1');
            $statement->execute(array(':usuario' => $usuario));
            $resultado = $statement->fetch();
            
                        
            if ($resultado != false){
                $error .= '<i>Este usuario ya existe</i>';
            }
            
            if ($clave != $clave2){
                $error .= '<i> Las contraseñas no coinciden</i>';
            }
            
            
        }
        
        if ($error == ''){
            $statement = $conexion->prepare('INSERT INTO login (id, correo, usuario, clave, apellido) VALUES (null, :correo, :usuario, :clave, :apellido)');
            $statement->execute(array(
                
                ':correo' => $correo,
                ':usuario' => $usuario,
                ':clave' => $clave,
                ':apellido'=> $apellido,
            ));
            
            $error .= '<i style="color: green;">Usuario registrado exitosamente</i>';
        }
    }


    require 'front/login_reg.php';

?>