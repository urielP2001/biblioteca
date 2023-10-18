<?php
session_start();

if (!empty($_POST["btningresar"])) {
    if (empty($_POST["usuario"]) || empty($_POST["password"])) {
        echo '<div class="alert alert-danger">LOS CAMPOS ESTÁN VACÍOS</div>';
    } else {
        // Conexión a la base de datos (ajusta esto según tu configuración)
        include "../model/conexion_bd.php";

        // Sanitización de entradas (previene inyecciones SQL)
        $usuario = mysqli_real_escape_string($conexion, $_POST["usuario"]);
        $clave = mysqli_real_escape_string($conexion, $_POST["password"]);

        // Consulta SQL utilizando sentencia preparada
        $consulta = "SELECT * FROM administrador WHERE usuario = ? LIMIT 1";
        if ($stmt = $conexion->prepare($consulta)) {
            $stmt->bind_param("s", $usuario);
            $stmt->execute();
            $resultado = $stmt->get_result();
            if ($resultado->num_rows === 1) {
                $datos = $resultado->fetch_object();
                

                $usuario=$_POST["usuario"];
                $clave=$_POST["password"];
                $sql=$conexion->query(" select * from administrador where usuario='$usuario' and clave='$clave' ");

                if ($datos=$sql->fetch_object()) {
                    $_SESSION["id"] = $datos->id;
                    $_SESSION["nombre"] = $datos->nombre;
                    $_SESSION["apellido"] = $datos->apellido;
                    $_SESSION["email"] = $datos->email;
                    $_SESSION["administrador"] = $datos->administrador;

                    // Redirige al usuario según su rol
                    if ($_SESSION['administrador'] === '1') {
                        header("location: ../gestor/views/gestor.php");
                    } elseif ($_SESSION['administrador'] === '2') {
                        header("location: ../gestor/views/gestor.php");
                    } else {
                        echo "<p>No tienes permiso para acceder a esta área.</p>";
                    }
                } else {
                    echo '<div class="alert alert-danger">CONTRASEÑA INCORRECTA</div>';

                }
            } else {
                echo '<div class="alert alert-danger">EL USUARIO NO EXISTE</div>';
            }
            $stmt->close();
        } else {
            echo '<div class="alert alert-danger">ERROR EN LA CONSULTA</div>';
        }

        // Cierra la conexión a la base de datos
        $conexion->close();
    }
}
?>
