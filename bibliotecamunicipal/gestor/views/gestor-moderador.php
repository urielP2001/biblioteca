<?php
session_start();
if (empty($_SESSION["id"])){
  header("location: ../../views/v_login.php");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="../img/logo.png" />
    <script src="https://kit.fontawesome.com/2df137ad92.js" crossorigin="anonymous"></script>
    <title>Barra de Navegación</title>
    <link rel="stylesheet" href="../css/estilo.css?v=1.13">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>
    <div id="sidemenu" class="menu-collapsed">
        <!-- header --->
        <div id="header">
            <div id="title"><span>Gestor</span></div>
            <div id="menu-btn">
                <div class="btn-hamburger"></div>
                <div class="btn-hamburger"></div>
                <div class="btn-hamburger"></div>
            </div>
        </div>
        <!--PROFILE-->
        <div id="profile">
            <div id="photo"><img src="../img/perfil.jpg"></div>
            <div id="name"><span>Juan Perez</span></div>
        </div>

        <!--ITEMS-->
        <div id="menu-items">
            <div class="item">
            <a href="#" data-target="noticias" id="link-noticias" class="menu-link">
                <div class="icon"><img src="../img/new.png"></div>
                <div class="title"><span>Agregar Noticia</span></div>
            </a>
            <a href="#" data-target="actividades" id="link-actividades" class="menu-link">
                <div class="icon"><img src="../img/actividades.png"></div>
                <div class="title"><span>Agregar Actividad</span></div>
            </a>

            </div>
            <div class="item separator"></div>
            <div class="item">
                <a href="#" data-target="lista_noti" id="link-lista_noti" class="menu-link">
                    <div class="icon"><img src="../img/lista-noticias.png"></div>
                    <div class="title"><span>Lista de noticias</span></div>
                </a>
                <a href="#" data-target="lista_act" id="link-lista_act" class="menu-link">
                    <div class="icon"><img src="../img/lista-actividad.png"></div>
                    <div class="title"><span>Lista de Actividades</span></div>
                </a>
                
            </div>
            <div class="item separator"></div>
            <div class="item">
                <a href="salir.php" id="link-salir_admin" >
                    <div  class="icon"><img src="../img/salir.png"></div>
                    <div class="title"><span>Salir</span></div>
                </a>
            </div>
        </div>
    </div>
        <!--Contenedores-->
    <div id="main-container">
        <!--Agregar noticias-->
        <div id="noticias" class="content" style="display: none;">
            <h2 class="text-center m-3">Agregar Noticia</h2>
                       
            
            <form id="formulario-noticias" class="formulario1 row d-flex justify-content-center" method="POST" enctype="multipart/form-data">
            <div class="d-flex justify-content-center">
            <?php
            include "../controller/c_agregar_noticia.php";
            ?> 
            </div>
            
            <div class="col-4 mb-3 text-center">
                    <label class="form-label">Titulo de la noticia</label>
                    <input type="text" class="form-control" name="titulo_not" placeholder="Titulo de la noticia">
                </div>
                <div class="col-9 mb-3 text-center">
                    <label for="exampleFormControlTextarea1" class="form-label">Descripcion breve de la noticia</label>
                    <textarea class="form-control" rows="3" name="descripcion_not"></textarea>
                </div>
                <div class="col-9 mb-3 text-center">
                    <label class="form-label">Contenido de la noticia</label>
                    <textarea class="form-control" name="contenido_not" rows="3"></textarea>
                </div>
                <div class="col-6 mb-3 text-center">
                    <label class="form-label">Imagen destacada de la noticia</label>
                    <input type="file" class="form-control" name="foto_not">
                </div>
                <div class="col-6 mb-3 text-center">
                    <label for="name" class="form-label">Fecha y hora de publicacion</label>
                    <input type="datetime-local" class="form-control" name="fecha_publicacion_not" id="">
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary" name="btnagregarnoticia" id="submitBtn">Guardar</button>
                    </div>
                </div>
            </form>
            <div id="mensaje"></div>
        </div>
        <!--Agregar actividad-->
        <div id="actividades" class="content" style="display: none;">
            <h2 class="text-center m-3">Agregar Actividad</h2>
            <form class="formulario1 row d-flex justify-content-center" method="POST" enctype="multipart/form-data">
            <div class="d-flex justify-content-center">
            <?php
            include "../controller/c_agregar_act.php";
            ?> 
            </div>
            <div class="col-4 mb-3 text-center">
                    <label class="form-label ">Titulo de la actividad</label>
                    <input type="text" class="form-control" name="titulo_act" placeholder="Titulo de la noticia">
                </div>
                <div class="col-9 mb-3 text-center">
                    <label for="exampleFormControlTextarea1" class="form-label">Descripcion breve de la actividad</label>
                    <textarea class="form-control"rows="3" name="descripcion_act"></textarea>
                </div>
                <div class="col-9 mb-3 text-center">
                    <label class="form-label">Contenido de la actividad</label>
                    <textarea class="form-control" rows="3" name="contenido_act"></textarea>
                </div>
                <div class="col-6 mb-3 text-center">
                    <label class="form-label">Imagen destacada de la actividad</label>
                    <input type="file" class="form-control" name="foto_act" >
                </div>
                <div class="col-6 mb-3 text-center">
                    <label for="name" class="form-label">Fecha y hora de publicacion</label>
                    <input type="datetime-local" class="form-control" name="fecha_publicacion_act" id="">
                </div>
                <div class="row d-flex justify-content-center">
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary" name="btnagregar_act" value="ok">Guardar</button>
                </div>
            </div>
            </form>
        </div>
         <!--LISTA NOTICIA-->

        <div id="lista_noti" class="content" style="display: none;">
            <div class="container">
                <h2 class="mt-5">Lista de noticias</h2>
                <table>
                    <thead>
                        <tr>
                            <th scope="col-1">TITULO</th>
                            <th scope="col-1">DESCRIPCION</th>
                            <th scope="col-1">CONTENIDO</th>
                            <th scope="col-1">IMAGEN DESTACADA</th>
                            <th scope="col-1">FECHA DE PUBLICACION</th>
                            <th scope="col-1">ESTADO</th>
                            <th scope="col-1" style="width: 225px;">EDITAR/ELIMINAR</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                            include "../controller/c_estado_noti.php";
                             include "../Model/conexion_bd.php";
                            $sql=$conexion->query("select * from noticias");
                            while ($datos = $sql->fetch_object()) {
                                $fechaPublicacion = date('d-m-Y H:i:s', strtotime($datos->fecha_publicacion)); ?>
                            <th ><?=$datos->titulo?></th>
                            <th ><?=$datos->descripcion?></th>
                            <th ><?=$datos->contenido?></th>
                            <th ><?=$datos->imagen?></th>
                            <th ><?=$fechaPublicacion?></th>
                            <th ><?=$datos->estado?></th>
                            <td>
                                <a href="v_editar_noticia.php?id=<?=$datos->id_noticia?>" class="btn btn-primary">Editar</a>
                                <a onclick="eliminarNoti(<?=$datos->id_noticia?>)" class="btn btn-small btn-danger">Eliminar</i></a>
                            </td>

                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
                
        </div>

        <!--LISTA ACTIVIDADES-->

        <div id="lista_act" class="content" style="display: none;">
            <div class="container">
                <h2 class="mt-5">Lista de actividades</h2>
                <table>
                    <thead>
                        <tr>
                            <th scope="col-1">TITULO</th>
                            <th scope="col-1">DESCRIPCION</th>
                            <th scope="col-1">CONTENIDO</th>
                            <th scope="col-1">IMAGEN DESTACADA</th>
                            <th scope="col-1">FECHA DE PUBLICACION</th>
                            <th scope="col-1">ESTADO</th>
                            <th scope="col-1" style="width: 225px;">EDITAR/ELIMINAR</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            
                            <?php include "../Model/conexion_bd.php";
                            include "../controller/c_estado_act.php";
                            $sql=$conexion->query("select * from actividades");
                            
                            while ($datos = $sql->fetch_object()) { ?>
                            <th ><?=$datos->titulo?></th>
                            <th ><?=$datos->descripcion?></th>
                            <th ><?=$datos->contenido?></th>
                            <th ><?=$datos->imagen?></th>
                            <th ><?=$datos->fecha_publicacion?></th>
                            <th ><?=$datos->estado?></th>
                            <td>
                                <a href="v_editar_act.php?id=<?=$datos->id_actividades?>" class="btn btn-primary">Editar</a>
                                <a onclick="eliminarAct(<?=$datos->id_actividades?>)" class="btn btn-small btn-danger">Eliminar</i></a>
                            </td>

                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
                
        </div>
    </div>
<script src="../js/script.js?v=1.2"></script>
</body>
</html>
