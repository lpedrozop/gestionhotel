<?php

include ("db.php");

$DOCUMENTO=($_POST["Documento"]);
session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);
$_SESSION['Documento']=$DOCUMENTO;

$NOMBRE=$_POST['nombre'];
$CELULAR=$_POST['celular'];
$CPERSONAS=$_POST['cpersonas'];
$LLEGADA=$_POST['llegada'];
//($SADD=$_POST['sadd'];

$consulta= "INSERT INTO `reserva_salon` (`ID_asso`,`nombre`, `celular`, `cpersonas`, `llegada`, `salon_id`, `activo`)
VALUES ('$DOCUMENTO', '$NOMBRE', '$CELULAR', '$CPERSONAS', '$LLEGADA', '3', 'si')";

$resultado = mysqli_query($conexion, $consulta) or die("Error de registro");



mysqli_close($conexion);

header("location:https://mpago.li/2dR8Nh8");
?>