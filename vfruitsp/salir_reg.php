<?php session_start();

    if(isset($_SESSION['usuario'])) {
        header('location: principal.php');
    }else{
        header('location: registro.php');
    }


?>