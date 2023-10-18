<?php
include "../model/conexion_bd.php";
$id = $_GET["id"];

// Consulta SQL para seleccionar el registro de la tabla "noticias" con el ID especificado
$sql = "SELECT * FROM actividades WHERE estado = 'publicado' AND id_actividades = $id";

$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    while ($fila = $resultado->fetch_assoc()) {
        // Acceder a los datos de cada registro
        $titulo = $fila["titulo"];
        $descripcion = $fila["descripcion"];
        $contenido = $fila["contenido"];
        $imagen = $fila["imagen"];

        // Mostrar los datos o realizar cualquier otra operación
        echo "<div class='coffee-1'>";
        echo "<h3>". $titulo ."</h3>";
        echo "<img src='../gestor/img/actividades/".$imagen."'  alt=''>";
        echo "<p>". $descripcion ."</p>";
        echo "<p>". $contenido ."</p>";
        echo "</div>";
    }
} else {
    echo "No se encontraron registros";
}
?>
