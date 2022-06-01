<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

include ("db.php");

$NOMBRE=$_POST['txtnombre'];
$DOCUMENTO=$_POST['txtdocumento'];
$EMAIL=$_POST['txtemail'];
$PASSWORD=$_POST['txtpassword'];

$consulta= "INSERT INTO `registrou` (`nombre`, `Documento`, `password`, `usuario`, `tipo_usuario`)
VALUES ('$NOMBRE', '$DOCUMENTO', '$PASSWORD', '$EMAIL', '2')";

$resultado = mysqli_query($conexion, $consulta); // or die("Error de registro");

if($resultado = true ){
   
    ?>
    <!DOCTYPE html>
<html lang="en">

<head></head>
	<meta charset="UTF-8">
    <title>Pagar</title>
    <link rel="stylesheet" type="text/css" href="css/registro.css">

</head>

<body>
        <div class="registro">
            <h1>Registro exitoso</h1>
        </div>
</body>

</html>
    <?php
}else
if ($resultado = false){
    header("location:login.php");
}

mysqli_close($conexion);

include("login.php");

?>
