<?php
include 'conexion.php';

// Ejecutar consulta
$sql = "SELECT * FROM cuentas";
$resultado = $conexion->query($sql);

// Comprobar si la consulta fue exitosa
if ($resultado->num_rows > 0) {
    // Mostrar los datos de cada fila
    while ($fila = $resultado->fetch_assoc()) {
        echo "Nombre: " . $fila["nombre"] . " - Apellido: " . $fila["apellido"] . "<br  >";
    }
} else {
    echo "0 resultados";
}

// Cerrar conexión
$conexion->close();
?>
