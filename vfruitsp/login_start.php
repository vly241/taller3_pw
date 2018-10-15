<?php session_start();

    if(isset($_SESSION['usuario'])) {
        header('location: index.php');
    }

    $error = '';
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $usuario = $_POST['usuario'];
        $clave = $_POST['clave'];
        $clave = hash('sha512', $clave);

       
        
       	require_once 'public/conexion.php';
        
        $statement = $conexion->prepare('
        SELECT * FROM login WHERE usuario = :usuario AND clave = :clave '
        );
        
        $statement->execute(array(
            ':usuario' => $usuario,
            ':clave' => $clave,
            
        ));
            
        $resultado = $statement->fetch();
        
        if ($resultado !== false){
            $_SESSION['usuario'] = $usuario['usuario'];
            header('location: principal.php');
            
        }else {
           
             header('location: login_start.php');
        }
    }
    
require 'front/login.php';


?>