
<?php
include "../Model/conexion_bd.php";

// Obtener las noticias cuya fecha de publicación es menor o igual a la fecha y hora actual
$sql = "SELECT * FROM noticias WHERE fecha_publicacion <= NOW() AND estado = 'pendiente'";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    while ($fila = $resultado->fetch_assoc()) {
        // Acceder a los datos de cada noticia
        $id = $fila["id_noticia"];
        $titulo = $fila["titulo"];
        $descripcion = $fila["descripcion"];
        $contenido = $fila["contenido"];
        $imagen = $fila["imagen"];

        // Realizar las acciones necesarias, por ejemplo, cambiar el estado a "publicado"
        // o enviar notificaciones
        
        // ...

        // Actualizar el estado de la noticia a "publicado"
        $sqlUpdate = "UPDATE noticias SET estado = 'publicado' WHERE id_noticia = $id";
        $conexion->query($sqlUpdate);
        
        // Mostrar mensajes, enviar notificaciones, actualizar interfaz de usuario, etc.
        echo "Noticia publicada: " . $titulo . "<br>";
    }
} else {
    echo "No hay noticias pendientes de publicación";
}

?>