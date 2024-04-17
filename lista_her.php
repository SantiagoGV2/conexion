<?php
include "basededatos.php";

// Sanitizar la entrada del usuario
$cedulaEmpleado = mysqli_real_escape_string($conexion, $_POST["emple_cedula"]);

// Consulta preparada para seleccionar los datos de la tabla herramientas
$consulta = "SELECT herramientas.her_cod, herramientas.her_descripcion, herramientas.her_estado, herramientas.her_fecha_entrega, herramientas.her_fecha_devolucion, herramientas.her_observacion, herramientas.emple_cedula FROM herramientas WHERE herramientas.emple_cedula = herramientas.emple_cedula;";

// Preparar la consulta
$statement = mysqli_prepare($conexion, $consulta);
mysqli_stmt_bind_param($statement, 's', $cedulaEmpleado);

// Ejecutar la consulta
mysqli_stmt_execute($statement);

// Obtener el resultado
$resultado = mysqli_stmt_get_result($statement);

// Array para almacenar los resultados
$herramientas = array();

// Iterar sobre los resultados y almacenarlos en el array
while ($fila = mysqli_fetch_assoc($resultado)) {
    $herramientas[] = $fila;
}

// Devolver los datos en formato JSON
echo json_encode($herramientas);

// Cerrar el statement y la conexión a la base de datos
mysqli_stmt_close($statement);
mysqli_close($conexion);
?>
