
<?php
include "../Model/conexion_bd.php";

// Obtener las noticias cuya fecha de publicación es menor o igual a la fecha y hora actual
$sql = "SELECT * FROM actividades WHERE fecha_publicacion <= NOW() AND estado = 'pendiente'";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    while ($fila = $resultado->fetch_assoc()) {
        // Acceder a los datos de cada noticia
        $id = $fila["id_actividades"];
        $titulo = $fila["titulo"];
        $descripcion = $fila["descripcion"];
        $contenido = $fila["contenido"];
        $imagen = $fila["imagen"];
        // Actualizar el estado de la noticia a "publicado"
        $sqlUpdate = "UPDATE actividades SET estado = 'publicado' WHERE id_actividades = $id";
        $conexion->query($sqlUpdate);
        
        // Mostrar mensajes, enviar notificaciones, actualizar interfaz de usuario, etc.
        echo "Actividad publicada: " . $titulo . "<br>";
    }
} else {
    echo "No hay actividades pendientes de publicación";
}

?>