<DOCTYPE html>
    <html lang="es">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" >
    <link rel="stylesheet" href="Formulario.css">
    <link rel="stylesheet" href="Formulario">
    </head>
    <body>
    
    <form method="post" action="send.php" autocomplete="off">
    <h2>Bienvenido</h2>
    <div class="input-group">

        <div class="input-container">
            <input type="text" name="name" placeholder="Nombre">
            <i class="fa-solid fa-lock"></i>
        </div>

        <div class="input-container">
            <input type="password" name="password" placeholder="Contraseña">
            <i class="fa-solid fa-lock"></i>
        </div>

        <div class="input-container">
            <input type="email" name="email" placeholder="Correo">
            <i class="fa-solid fa-envelope"></i>
        </div>

        <div class="input-container">
            <input type="tel" name="phone" placeholder="Telefono">
            <i class="fa-solid fa-phone"></i>
        </div>
        
        <a href="#"> Terminos y Condiciones</a>
        <input type="submit" name="send" class="btn" value="Enviar">
    </div>
</form>

<?php
        include("send.php");
    ?>



</body>
</html>