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
$SALIDA=$_POST['salida'];


$consulta= "INSERT INTO `reserva_habitacion` (`ID_asso`,`nombre`, `celular`, `personas`, `date_i`, `date_f`,`habitacion_id`, `activo`)
VALUES ('$DOCUMENTO', '$NOMBRE', '$CELULAR', '$CPERSONAS', '$LLEGADA', '$SALIDA', '4', 'si')";

$resultado = mysqli_query($conexion, $consulta) or die("Error de registro");



mysqli_close($conexion);

header("location:https://mpago.li/1Z1asxB");
?>