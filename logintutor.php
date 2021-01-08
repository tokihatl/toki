<?php
    session_start();
    require 'con_db.php';
    if(isset($_SESSION['nombre'])){
        header('Location: inicio.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">  
        <title>Iniciar sesión - Tutor / Mentor</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="login.css"/>
        <link rel="stylesheet" type="text/css" href="fonts.css"/>
    </head>
    <body background="img/fondotesi.png" class="grid-container">
            <header class="header">
                <img src="img/tecnm.png" alt="">
                <img src="img/tesi.png" alt="">
                    SISTEMA DE MODELO DE EDUCACIÓN DUAL
                <img src="img/edomex.png" alt="">
                <img src="img/gobierno.png" alt="">
            </header>
            <div class="main">
                <form class="sesion" method="post">
                    <h4>Inicie sesión en su cuenta</h4>
                    <h5>¿No tiene una cuenta?... <a href="registrotutor.php">Crear una</a>
                    <input class="controls" type="text" name="id" placeholder="ID">
                    <input class="controls" type="password" name="contra" placeholder="Contraseña">
                    <input class="botons" name="entrar" type="submit" value="Iniciar sesión">
                    <p><a href="#">Olvidé la contraseña</a></p>
                </form>
            </div>
            <div class="footer">
            </div>     
    </body>
</html>