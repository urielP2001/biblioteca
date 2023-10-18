<?php
include "../Model/conexion_bd.php";

// Consulta SQL para seleccionar los elementos en estado "publicado"
$sql = $conexion->query("SELECT * FROM noticias WHERE estado = 'publicado'");

if ($sql->num_rows > 0) {
    // Hay elementos publicados, realizar las acciones necesarias
    while ($fila = $sql->fetch_assoc()) {
        // Acciones para mostrar los elementos publicados, por ejemplo:
        $id = $fila["id_noticia"];
        $titulo = $fila["titulo"];
        $descripcion = $fila["descripcion"];
        $contenido = $fila["contenido"];
        $imagen = $fila["imagen"];


        // Mostrar los datos en tu aplicación, por ejemplo:
        echo "<div class='coffee-1'>";
        echo "<img src='../img/file/".$imagen."'  alt=''>";
        echo "<h3>". $titulo ."</h3>";
        echo "<p>". $descripcion ."</p>";
        echo "</div>";
    }
} else {
    // No hay elementos publicados
    echo "No hay elementos publicados en este momento.";
}
?>