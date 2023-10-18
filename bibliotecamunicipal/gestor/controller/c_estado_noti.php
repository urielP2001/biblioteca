<?php
// Incluir el archivo de conexión a la base de datos si es necesario
include "../model/conexion_bd.php";

if (!$conexion) {
    die("Error de conexión a la base de datos: " . mysqli_connect_error());
}

// Obtener la fecha y hora actual
$fechaActual = date('Y-m-d H:i:s');

// Consulta SQL para seleccionar las noticias pendientes con fecha de publicación menor o igual a la fecha actual
$sql = "SELECT * FROM noticias WHERE estado = 'pendiente' AND fecha_publicacion <= '$fechaActual'";

$resultado = mysqli_query($conexion, $sql);

if ($resultado) {
    while ($fila = mysqli_fetch_assoc($resultado)) {
        // Actualizar el estado de la noticia a "publicado"
        $idNoticia = $fila['id_noticia'];
        $sqlActualizar = "UPDATE noticias SET estado = 'publicado' WHERE id_noticia = $idNoticia";

        if (mysqli_query($conexion, $sqlActualizar)) {
            echo "Noticia ID $idNoticia actualizada a 'publicado'.<br>";
        } else {
            echo "Error al actualizar la noticia ID $idNoticia: " . mysqli_error($conexion) . "<br>";
        }
    }

    // Liberar el resultado
    mysqli_free_result($resultado);
} else {
    echo "Error al ejecutar la consulta: " . mysqli_error($conexion);
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>
