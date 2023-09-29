<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>Reto globant</title>
</head>
<body>
    <?php
    if(isset($_POST['submit'])){
        $Usuario = $_POST['nombre'];
        $contraseña = $_POST['correo'];
    }
    ?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
 <section class="form">
    <center><h4>Iniciar Sesion</h4></center>
    <input class="controls" type="text" name="nombre" id="nombre" placeholder="Usuario"  value="<?php if(isset($usuario)) echo $usuario ?>">
    <input class="controls" type="password" name="correo" id="correo" placeholder="Contraseña"  value="<?php if(isset($contraseña)) echo $contraseña ?>">
    
    <input class="botons" type="submit" name="submit">
    <?php
      include ("validar.php");
      ?>
 </section>
 
 </form>
 
</body>
</html> 