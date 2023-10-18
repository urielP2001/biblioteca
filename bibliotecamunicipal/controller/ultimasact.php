<?php
include "model/conexion_bd.php";

// Consulta SQL para seleccionar los últimos 3 registros de la tabla "noticias"
$sql = "SELECT * FROM actividades WHERE estado = 'publicado' ORDER BY id_actividades DESC LIMIT 2";

$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    while ($fila = $resultado->fetch_assoc()) {
        // Acceder a los datos de cada registro
        $id = $fila["id_actividades"];
        $titulo = $fila["titulo"];
        $descripcion = $fila["descripcion"];
        $contenido = $fila["contenido"];
        $imagen = $fila["imagen"];

        // Mostrar los datos o realizar cualquier otra operación
        echo "<a id='link' href='views/actividadindividual.php?id=$id'>";
        echo "<div class='coffee-1'>";
        echo "<img src='gestor/img/actividades/".$imagen."'  alt=''>";
        echo "<h3>". $titulo ."</h3>";
        echo "<p>". $descripcion ."</p>";
        echo "</div>";
        echo "</a>";
        

    }
} else {
    echo "No se encontraron registros";
}

$conexion->close();
?>
