



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    

    
</head>
<body>
   
 
            <div class="logo-title">
                <img src="img/logo.PNG" alt="">
                
            </div>
           
    <div class="contenedor-form">
       
        
          <div class="menu">
                <a href="login_start.php"><li class="module-login active">Login</li></a>
               
                 <a href="registro.php"><li class="module-register">Register</li></a>
            </div>
       
        
        
        <div class="formulario">
            <h2>Iniciar Sesión</h2>
            
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="form">
              
              
               <div class="user line-input">
                  <input type="text" placeholder="Usuario" name="usuario" required>
               </div>
               
               
                <div class="password line-input">
                    <input type="password" placeholder="Contraseña" name="clave" required>
                </div>
                
              
                       
                <?php if(!empty($error)): ?>
                 <div class="mensaje">
                <?php echo $error; ?>
                 </div>
               <?php endif; ?>
                
                <input type="submit" value="iniciar">
                
            </form>
            
             
            
        </div>
        
         <div class="reset-password">
            <a href="#">Olvide mi Contraseña?</a>
        </div>
      
    </div>
    <script src="js/jquery.min.js"></script>    
    <script src="js/login.js"></script>
    <script type="text/javascript" src="js/ad.js"></script>
</body>
</html>