<?php
	session_start();
	if(!isset($_SESSION['nombre'])){
		header('Location: index.php');
	}elseif(isset($_SESSION['nombre'])){
		include 'con_db.php';
		$sentencia = $conn->query("SELECT * FROM datosalumnos;");
		$datos = $sentencia->fetchAll(PDO::FETCH_OBJ);
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
            <div class="main">
            <h2>Binvenido <?php echo $_SESSION['nombre']; ?> </h2>
            <h4>Ya has iniciado sesión</h4>
            <a href="logout.php">Cerrar sesión</a>
            </div>
            <div class="footer">
            </div> 
    </body>
</html>