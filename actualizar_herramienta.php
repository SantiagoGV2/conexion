<?php
include "basededatos.php";

$her_cod = $_POST['her_cod'];
$her_descripcion = $_POST['her_descripcion'];
$her_estado = $_POST['her_estado'];
$her_fecha_entrega = $_POST['her_fecha_entrega'];
$her_fecha_devolucion = $_POST['her_fecha_devolucion'];
$her_observacion = $_POST['her_observacion'];

// Query para actualizar los datos en la base de datos
$sql = "UPDATE herramientas SET her_descripcion = '$her_descripcion', her_estado = '$her_estado', her_fecha_entrega = '$her_fecha_entrega', her_fecha_devolucion = '$her_fecha_devolucion', her_observacion = '$her_observacion' WHERE her_cod = '$her_cod'";

// Ejecutar la query
if ($conn->query($sql) === TRUE) {
    echo "Datos actualizados correctamente";
} else {
    echo "Error al actualizar los datos: " .mysqli_error($conexion);
}
?>