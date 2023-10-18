<?php
include "model/conexion_bd.php";

// Consulta SQL para seleccionar los últimos 3 registros de la tabla "noticias"
$sql = "SELECT * FROM noticias WHERE estado = 'publicado' ORDER BY id_noticia DESC LIMIT 2";

$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    while ($fila = $resultado->fetch_assoc()) {
        // Acceder a los datos de cada registro
        $id = $fila["id_noticia"];
        $titulo = $fila["titulo"];
        $descripcion = $fila["descripcion"];
        $contenido = $fila["contenido"];
        $imagen = $fila["imagen"];

        // Mostrar los datos o realizar cualquier otra operación
        echo "<a id='link' href='views/noticiaindividual.php?id=$id'>";
        echo "<div class='coffee-1'>";
        echo "<img src='gestor/img/noticias/".$imagen."'  alt=''>";
        echo "<h3>". $titulo ."</h3>";
        echo "<p>". $descripcion ."</p>";
        echo "</div>";
        echo "</a>";
        echo "<div class='coffee-1'>";
        echo "<img src='img/file/".$imagen."'  alt=''>";
        echo "<h3>". $titulo ."</h3>";
        echo "<p>". $descripcion ."</p>";
        echo "</div>";
        

    }
} else {
    echo "No se encontraron registros";
}

$conexion->close();
?>
