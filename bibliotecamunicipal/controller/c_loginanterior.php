<?php

    session_start();

    if(!empty($_POST["btningresar"])) {
        if (empty($_POST["usuario"]) and empty($_POST["password"])) {
            echo '<div class="alert alert-danger">LOS CAMPOS ESTAN VACIOS</div>';
        } else {
            $usuario=$_POST["usuario"];
            $clave=$_POST["password"];
            $sql=$conexion->query(" select * from administrador where usuario='$usuario' and clave='$clave' ");
            if ($datos=$sql->fetch_object()) {
                $_SESSION["id"]=$datos->id;
                $_SESSION["nombre"]=$datos->nombres;
                $_SESSION["apellido"]=$datos->apellidos;
                $_SESSION["administrador"]=$datos->administrador;
                header("location:../gestor/views/gestor.php");
            } else {
                echo '<div class="alert alert-danger">EL USUARIO O CONTRASEÑA NO EXISTEN</div>';
            }
            // Verifica si el usuario ha iniciado sesión y tiene un rol asignado
            if (isset($_SESSION['administrador'])) {
                $rol = $_SESSION['administrador'];

                // Si el usuario es administrador, muestra elementos específicos para administradores
                if ($rol === 'administrador') {
                    header("location: ../gestor/views/gestor-admin.php");
                } 
                // Si el usuario es moderador, muestra elementos específicos para moderadores
                elseif ($rol === 'moderador') {
                    header("location: ../gestor/views/gestor-moderador.php");
                } 
                // Si el usuario tiene otro rol, puedes manejarlo de manera adecuada
                else {
                    echo "<p>No tienes permiso para acceder a esta área.</p>";
                }
            } else {
                // El usuario no ha iniciado sesión, manejarlo de acuerdo a tus necesidades (por ejemplo, redirigir a la página de inicio de sesión)
            }
                    }
    }
?>