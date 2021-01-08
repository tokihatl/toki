<?php
$message='';
require 'con_db.php';
if(isset($_POST['register'])){
    if (strlen($_POST['nombres']) >= 1 &&
        strlen($_POST['apellidos']) >= 1 &&
        strlen($_POST['matricula']) >= 1 &&
        strlen($_POST['contra']) >= 1 &&
        strlen($_POST['estatus']) >= 1 &&
        strlen($_POST['semestre']) >= 1) {
            $nombres = trim($_POST['nombres']);
            $apellidos = trim($_POST['apellidos']);
            $matricula = trim($_POST['matricula']);
            $contra = trim($_POST['contra']);
            $contra = md5($contra);
            $estatus = trim($_POST['estatus']);
            $semestre = trim($_POST['semestre']);
            $consulta = "INSERT INTO datosalumnos(nombres, apellidos, matricula, contra, estatus, semestre) VALUES ('$nombres','$apellidos','$matricula','$contra','$estatus','$semestre')";
            $resultado = $conn->prepare($consulta);
            if($resultado->execute()){
                echo '<script language="javascript">';
                echo 'alert("Te has registrado correctamente.")';
                echo '</script>';
            } else {
                echo '<script language="javascript">';
                echo 'alert("Ha ocurrido un error, vuelve a intentarlo.")';
                echo '</script>';
            }
    }   else{
            echo '<script language="javascript">';
            echo 'alert("Hay campos vacíos")';
            echo '</script>';
}
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">  
        <title>Registrarse - Alumno</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="registro.css"/>
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

            <?php if(!empty($message)): ?>
                <p><?= $message ?></p>
            <?php endif; ?>

            <div class="main">
                <form class="registro" method="post">
                    <h4>Crear una cuenta de alumno</h4>
                    <input class="controls" type="text" name="nombres" placeholder="Ingrese sus nombres">
                    <input class="controls" type="text" name="apellidos" placeholder="Ingrese sus apellidos">
                    <input class="controls" type="text" name="matricula" placeholder="Ingrese su matricula">
                    <input class="controls" type="password" name="contra" placeholder="Ingrese una contraseña">
                    <input class="controls" type="password" name="concontra" placeholder="Confirme la contraseña">
                    <h5>Seleccione su estatus</h5>
                    <select class="controls" name="estatus">
                        <option>Regular</option>
                        <option>Irregular</option>
                    </select>
                    <h5>Seleccione su semestre actual</h5>
                    <select class="controls" name="semestre">
                        <option>Sexto</option>
                        <option>Septimo</option>
                        <option>Octavo</option>
                    </select>
                    <input class="botons" name="register" type="submit" value="Registrarse">
                    <p><a href="loginalumno.php">Ya tengo una cuenta</a></p>
                </form>
            </div>
            <div class="footer">
            </div>     
    </body>
</html>