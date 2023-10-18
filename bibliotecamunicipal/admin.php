<?php
session_start();
if (empty($_SESSION["id"])){
  header("location: v_login.php");
}
include "../controller/estado.php";
?>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Biblioteca Popular Coronda</title>
  <link rel="stylesheet" href="../css/admin.css?V=1.0">
  <script src="https://kit.fontawesome.com/8697250bf3.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="../css/admin2.css">
    <link rel="stylesheet" href="../css/adminnoticias.css?v=1.1">
</head>
<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img"> 
            <img src="../img/logo.png" alt="">
        </div>
    </header>

    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> 
                <a href="#" class="nav_logo" data-target="biblioteca"> 
                    <i class='bx bx-layer nav_logo-icon'></i> 
                    <span class="nav_logo-name">Biblioteca</span> 
                </a>
                <div class="nav_list"> 
                    <a href="../controller/controller_guardar_categoria.php" class="nav_link" data-target="inicio"> 
                        <i class='bx bx-user nav_icon'></i> 
                        <span href="../controller/controller_guardar_categoria.php" class="nav_name">Inicio</span> 
                    </a> 
                    <a href="#" class="nav_link" data-target="articulos"> 
                        <i class='bx bx-message-square-detail nav_icon'></i> 
                        <span class="nav_name">Articulos</span> 
                    </a> 
                    <a href="#" class="nav_link" data-target="comentarios"> 
                        <i class='bx bx-bookmark nav_icon'></i> 
                        <span class="nav_name">Comentarios</span> 
                    </a> 
                    <a href="#" class="nav_link" data-target="categorias"> 
                        <i class='bx bx-folder nav_icon'></i> 
                        <span class="nav_name">Categorias</span> 
                    </a>
                    <a href="#" class="nav_link" data-target="usuarios"> 
                        <i class='bx bx-folder nav_icon'></i> 
                        <span class="nav_name">Usuarios</span> 
                    </a>  
                </div>
            </div>
            <div>
            <a href="../controller/c_cerrar_session.php" class="nav-link" >
                <i class='bx bx-log-out nav_icon'></i>
                <span class="nav_name">Salir</span>
            </a>

            </div>
        </nav>
    </div>
    <!--Container Main start-->
    <div class="height-100 bg-light">
        <div id="biblioteca" class="content" >
            Contenido de Biblioteca
            
        </div>
        <div id="inicio" class="content" style="display: none;">
            Contenido de Inicio
            <form class="form" method="POST" action="" enctype="multipart/form-data">
            <?php
            include "../controller/controller_guardar_categoria.php";
            ?>

                <h2 class="form_tittle">AGREGAR NOTICIA</h2>
                
                <div class="form__group">
                    <label for="name" class="form__label">Titulo</label>
                    <input type="text" class="form__input" name="titulo">
                </div>
                <div class="form__group">
                    <label for="name" class="form__label">Descripcion Breve</label>
                    <textarea id="mensaje" class="form__input" name="descripcion" rows="4" cols="50"></textarea>
                </div>
                <div class="form__group">
                    <label for="name" class="form__label">Contenido</label>
                    <textarea id="mensaje" class="form__input" name="contenido" rows="4" cols="50"></textarea>
                </div>
                <div class="form__group">
                    <label for="image" class="form__label">Imagen destacada</label>
                    <input type="file" class="form__input" name="foto" >
                </div>
                <div class="form__group">
                    <label for="name" class="form__label">Fecha y hora de publicacion</label>
                    <input type="datetime-local" name="fecha_publicacion" id="">
                </div>

                <div class="form__group">
                    <button type="submit" class="btn btn-primary" name="btnagregar" value="ok">Guardar Noticia</button>
                </div>
            </form>
        </div>
        <div class="container">
            .
        </div>
        <div id="articulos" class="content mt-5" style="display: none;">
            <div class="contenedor-fluid mt-3">
                <div class="caja">
                    <h1><span id="texto">LISTA DE NOTICIAS</span></h1>
                </div>
                <div class="container-fluid">
                    <table>
                        <thead>
                            <tr>
                                <th scope="col-1">TITULO</th>
                                <th scope="col-1">DESCRIPCION</th>
                                <th scope="col-1">CONTENIDO</th>
                                <th scope="col-1">IMAGEN DESTACADA</th>
                                <th scope="col-1">FECHA DE PUBLICACION</th>
                                <th scope="col-1">ESTADO</th>
                                <th scope="col-1" style="width: 225px;">ACCION</th>
                            </tr>
                        </thead>
                        <tbody >
                        <?php
                        
                            include "../Model/conexion_bd.php";
                            $sql=$conexion->query("select * from noticias");
                            
                            while ($datos = $sql->fetch_object()) { ?>
                                <tr class="text-center">      
                                    <th ><?=$datos->titulo?></th>
                                    <th ><?=$datos->descripcion?></th>
                                    <th ><?=$datos->contenido?></th>
                                    <th ><?=$datos->imagen?></th>
                                    <th ><?=$datos->fecha_publicacion?></th>
                                    <th ><?=$datos->estado?></th>
                                    <th>
                                        <a href="../Controller/c_agregar_bombero.php"  class="btn btn-small btn-info"><i class="fa-solid fa-user-plus"></i></a>
                                        <a href="v_modificar_bombero.php?id=<?= $datos->id ?>" class="btn btn-small btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                        <a class="btn btn-small btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                    </th>
                                    
                                </tr>
                        <?php }
                        ?>
                        

                    </table>
                </div>
            </div>




        </div>
        <div id="comentarios" class="content" style="display: none;">
        Contenido de Comentarios
        </div>
        <div id="categorias" class="content" style="display: none;">
            <h2>Categoria</h2>
            <form method="post" action="controller_guardar_categoria.php">
                <input type="text" name="new_category" placeholder="Ingrese el nombre de la nueva categoría" required>
                <a type="submit">Guardar Categoría</a>
            </form>
    
        
        </div>
        <div id="usuarios" class="content" style="display: none;">Contenido de Usuarios</div>
    </div>
    <!--Container Main end-->
    <script src="../js/admin.js?v=1.0"><script>

    <script rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>