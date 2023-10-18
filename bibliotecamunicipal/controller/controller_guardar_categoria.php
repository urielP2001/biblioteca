<?php
include "../Model/conexion_bd.php";

if (!empty($_POST["btnagregar"])) {
    // Verificar si se seleccionó un archivo
    if (!empty($_FILES["foto"]["name"])) {
        // Se ha seleccionado una imagen, realizar el proceso normal de carga de imagen
        $foto_extension = pathinfo($_FILES["foto"]["name"], PATHINFO_EXTENSION);
        $foto = uniqid() . "." . $foto_extension;
        $foto_temp = $_FILES["foto"]["tmp_name"];

        $targetDirectory = "../img/file/";
        $targetFile = $targetDirectory . basename($foto);
        if (move_uploaded_file($foto_temp, $targetFile)) {
            $titulo = $_POST["titulo"];
            $descripcion = $_POST["descripcion"];
            $contenido = $_POST["contenido"];
            $estado = "pendiente";
            $fechaPublicacion = $_POST["fecha_publicacion"]; // Obtener la fecha de publicación desde el formulario
            $fechaPublicacionFormatted = date('Y-m-d H:i:s', strtotime($fechaPublicacion)); // Formatear la fecha y hora
    
            $sql = $conexion->query("INSERT INTO noticias(titulo, descripcion, contenido, imagen, fecha_publicacion, estado) VALUES ('$titulo', '$descripcion', '$contenido', '$foto', '$fechaPublicacionFormatted', '$estado')");

            if ($sql == 1) {
                echo '<div class="alert alert-danger">Noticia agregada</div>';
            } else {
                echo '<div class="alert alert-danger">Error al registrar la noticia</div>';
            }
        } else {
            echo '<div class="alert alert-danger">Error al subir la imagen</div>';
        }
    } else {
        $titulo = $_POST["titulo"];
        $descripcion = $_POST["descripcion"];
        $contenido = $_POST["contenido"];
        $foto = "noticia.png";
        $estado = "pendiente";
        $fechaPublicacion = $_POST["fecha_publicacion"]; // Obtener la fecha de publicación desde el formulario
        $fechaPublicacionFormatted = date('Y-m-d H:i:s', strtotime($fechaPublicacion)); // Formatear la fecha y hora
    

        $sql = $conexion->query("INSERT INTO noticias(titulo, descripcion, contenido, imagen, fecha_publicacion, estado) VALUES ('$titulo', '$descripcion', '$contenido', '$foto', '$fechaPublicacionFormatted', '$estado')");

        if ($sql == 1) {
            echo '<div class="alert alert-danger">Noticia agregada</div>';
        } else {
            echo '<div class="alert alert-danger">Error al registrar la noticia</div>';
        }
    }
}

?>
