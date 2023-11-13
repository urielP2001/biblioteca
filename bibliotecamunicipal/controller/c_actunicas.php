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
        $fecha = $fila["fecha_publicacion"];

        // Mostrar los datos o realizar cualquier otra operación
        echo "<div class='coffee-1'>";
        echo "<h1>". $titulo ."</h1>";
        echo "<p>". $descripcion ."</p>";
        echo "<div class='fecha'>";
        echo "<h3>". $fecha ."</h3>"; 
        echo "<div class='red-social'>";
        echo "<a href='https://www.facebook.com/bibliotecacoronda' class='fa fa-facebook'></a>";
        echo "<a href='https://www.instagram.com/bibliocoronda/' class='fa fa-instagram'></a>";
        echo "<a href='https://www.youtube.com/@bibliotecapopularcoroneljo3821' class='fa fa-youtube'></a>";
        echo "</div>";
        echo "</div>";
        echo "<img src='../gestor/img/actividades/".$imagen."'  alt=''>";
        echo "<p>". $contenido ."</p>";
        echo "</div>";

    }
} else {
    echo "No se encontraron registros";
}
?>
