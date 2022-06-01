<?php

include("db.php");

$USUARIO=($_POST["usuario"]);
$PASSWORD=($_POST["password"]);
session_start();
$_SESSION['usuario']=$USUARIO;
$consulta = "SELECT* FROM registrou where usuario = '$USUARIO' and password ='$PASSWORD' ";
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_fetch_array($resultado);


if($filas['tipo_usuario'] ==1){  //Admin
    header("location:soft-ui-dashboard-main/pages/dashboard.php");

} else
if($filas['tipo_usuario'] == 2){ //Cliente
    header("location:indexlogin.php");
    

}

else {
    include("login.php")
    ?>
    <h1>Error de autenticacion</h1>
    <?php
}

mysqli_free_result($resultado);
mysqli_close($conexion);


?>