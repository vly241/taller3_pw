<?php session_start();

    if(isset($_SESSION['usuario'])){
        require 'front/pag_principal.php';
    }else{
        header ('location: login_start.php');
    }
        
?>