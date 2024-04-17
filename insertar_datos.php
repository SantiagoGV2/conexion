<?php
include "basededatos.php";

$codigo = $_POST["her_cod"];
$descripcion = $_POST["her_descripcion"];
$estado2 = $_POST["her_estado"];
$entrega = $_POST["her_fecha_entrega"];
$devolucion = $_POST["her_fecha_devolucion"];
$observacion = $_POST["her_observacion"];
$cedula = $_POST["emple_cedula"];  

$consulta = "INSERT INTO herramientas values('".$codigo."','".$descripcion."','".$estado2."','".$entrega."','".$devolucion."','".$observacion."','".$cedula."')";
$resultado = mysqli_query($conexion, $consulta);

if ($resultado) {
    echo "Herramienta insertada correctamente";
} else {
    echo "Error al insertar herramienta: " . mysqli_error($conexion);
}

// Cerrar conexión a la base de datos
mysqli_close($conexion);
?>