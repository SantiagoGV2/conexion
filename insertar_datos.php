<?php
include "basededatos.php";

$codigo = $_POST["her_cod"];
$descripcion = $_POST["her_descripcion"];
$estado2 = $_POST["her_estado"];
$entrega = $_POST["her_fecha_entrega"];
$devolucion = $_POST["her_fecha_devolucion"];

$consulta = "INSERT INTO herramientas values('".$codigo."','".$descripcion."','".$estado2."','".$entrega."','".$devolucion."')";
mysqli_query($conexion,$consulta) or die (mysqli_error($conexion));
mysqli_close($conexion)

?>
