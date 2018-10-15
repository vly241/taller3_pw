<?php session_start();

    session_destroy();
    $_SESSION = array();
    
    header('location: salir_reg.php');

?>