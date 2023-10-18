<?php
// Verificar si se ha enviado el formulario de actualización
if (isset($_POST['btn_actualizar_noticia'])) {
    // Realizar la conexión a la base de datos o incluir el archivo de conexión si es necesario
    include "../Model/conexion_bd.php";

    // Verificar si la conexión se estableció correctamente
    if (!$conexion) {
        die("Error de conexión a la base de datos: " . mysqli_connect_error());
    }

    // Obtener los datos del formulario
    $noticia_id = $_POST['noticia_id'];
    $titulo_not = $_POST['titulo_not'];
    $descripcion_not = $_POST['descripcion_not'];
    $contenido_not = $_POST['contenido_not'];
    $fecha_publicacion_not = $_POST['fecha_publicacion_not'];

    // Verificar si se ha seleccionado una nueva imagen
    if (!empty($_FILES["foto_not"]["name"])) {
        // Procesar la imagen y almacenarla en la carpeta correspondiente
        $foto_extension = pathinfo($_FILES["foto_not"]["name"], PATHINFO_EXTENSION);
        $foto = uniqid() . "." . $foto_extension;
        $foto_temp = $_FILES["foto_not"]["tmp_name"];

        $targetDirectory = "../img/noticias/";
        $targetFile = $targetDirectory . basename($foto);

        if (move_uploaded_file($foto_temp, $targetFile)) {
            // Actualizar el nombre de la imagen en la base de datos
            $sqlActualizarImagen = "UPDATE noticias SET imagen = '$foto' WHERE id_noticia = $noticia_id";
            if (!mysqli_query($conexion, $sqlActualizarImagen)) {
                echo '<div class="alert alert-danger">Error al actualizar la imagen: ' . mysqli_error($conexion) . '</div>';
            }
        } else {
            echo '<div class="alert alert-danger">Error al subir la nueva imagen</div>';
        }
    }

    // Preparar la consulta SQL para actualizar la noticia
    $sql = $conexion->prepare("UPDATE noticias SET titulo = ?, descripcion = ?, contenido = ?, fecha_publicacion = ? WHERE id_noticia = ?");
    $sql->bind_param("ssssi", $titulo_not, $descripcion_not, $contenido_not, $fecha_publicacion_not, $noticia_id);

    // Ejecutar la consulta SQL
    if ($sql->execute()) {
        // Redireccionar a la página gestor.php después de la actualización
        header("Location: ../views/gestor.php");
        exit; // Asegúrate de salir del script para evitar ejecuciones adicionales
    } else {
        echo '<div class="alert alert-danger">Error al actualizar la noticia: ' . $conexion->error . '</div>';
    }

    // Cerrar la conexión a la base de datos
    $conexion->close();
} else {
    // Si no se ha enviado el formulario de actualización, redirigir o mostrar un mensaje de error
    echo "Acceso no autorizado.";
}
?>
