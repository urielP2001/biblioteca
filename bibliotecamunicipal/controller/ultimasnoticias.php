<?php 
include "model/conexion_bd.php"; 
 
// Consulta SQL para seleccionar los últimos 3 registros de la tabla "noticias" 
$sql = "SELECT * FROM noticias WHERE estado = 'publicado' ORDER BY id_noticia DESC LIMIT 4"; 
 
$resultado = $conexion->query($sql); 
 
// Mostrar el contenedor solo si hay registros 
if ($resultado->num_rows > 0) { 
    echo '<div class="coffee-content container">'; 
    echo '<h2>noticias de la institución</h2>'; 
    echo '<div class="row">'; 
    echo '<div class="col-6" style="width:100%">';  
    echo '<div class="coffee-group">'; 
 
    // Iterar sobre los registros 
    while ($fila = $resultado->fetch_assoc()) { 
        $id = $fila["id_noticia"]; 
        $titulo = $fila["titulo"]; 
        $descripcion = $fila["descripcion"]; 
        $contenido = $fila["contenido"]; 
        $imagen = $fila["imagen"]; 
        $fecha = $fila["fecha_publicacion"];
 
        // Mostrar los datos o realizar cualquier otra operación 
        echo "<a id='link' href='views/noticiaindividual.php?id=$id'>"; 
        echo "<div class='coffee-1'>"; 
        echo "<img src='gestor/img/noticias/".$imagen."'  alt=''>"; 
        echo "<h3>". $titulo ."</h3>"; 
        echo "<p>". $descripcion ."</p>"; 
        echo "<p class='coffee-text' >&nbsp;&nbsp;&nbsp;&nbsp; " . $fecha . "</p>";
        echo "</div>"; 
        echo "</a>"; 
    } 
 
    echo '</div>'; 
    echo '<a href="views/noticias.php" class="btn-1" id="services">Informacion</a>'; 
    echo '</div>'; 
    echo '</div>'; 
    echo '</div>'; 
} 
 
$conexion->close(); 
?>
