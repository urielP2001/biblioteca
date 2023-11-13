<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css?v1.1">
    <title>Document</title>
    
    <style>
      body{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: url(../img/menu1.jpg) no-repeat;
    background-size: cover;
}
    </style>
  </head>
  <body>
      <header class="header" id="Inicio">
          <div class="menu container">
            <a href="#" class="logo"><img src="../img/logoBibliot2.png" alt=""></a>
            <input type="checkbox" id="menu">
            <label for="menu">
              <img src="img/menu.png" class="menu-icono" alt="">
            </label>
            <nav class="navbar">
              <ul>
                <li><a href="../#Inicio">Inicio</a></li>
                <li><a href="../#actividades">actividades</a></li>
                <li><a href="../#services">Servicios</a></li>
                <li><a href="../#blog">sobre nosotros</a></li>
                <li><a href="../#pie-pagina">Contacto</a></li>
              
              </ul>
            </nav>
      
          </div>
          
          
        </header>
        <div class="wrapper">
          <!-- <span class="icon-close"><ion-icon name="close"></ion-icon></span> -->
          
        
          <div class="form-box login">
            <h2>Login</h2>
            <form action="#" method="post">
              <div class="input-box">
                <span class="icon"><ion-icon name="mail"></ion-icon></span>
                <input type="text" name="usuario" required>
                <label for="">Usuario</label>
              </div>
              <div class="input-box">
                <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                <input type="password" name="password" required>
                <label for="">Contraseña</label>
              </div>
              <div class="remember-forgot">
                <label><input type="checkbox">recordar</label>
                <a href="#">olvidaste la contraseña?</a>
              </div>
              <input name="btningresar" class="btn btn-primary" type="submit" value="INICIAR SESION">
              <div class="login-register">
                <p>No tienes Cuenta?<a href="#" class="register-link">Registrar</a></p>
              </div>
            </form>
            <?php
                include("../model/conexion_bd.php");
                include("../controller/c_login.php");
                
                ?>
          </div>
      
          <div class="form-box register">
            <h2>Registrarme</h2>
            <form action="#">
              <div class="input-box">
                <span class="icon"><ion-icon name="person"></ion-icon></span>
                <input type="text" required>
                <label for="">Nombre de Usuario</label>
              </div>
              <div class="input-box">
                <span class="icon"><ion-icon name="mail"></ion-icon></span>
                <input type="text" name="usuario" required>
                <label for="">Usuario</label>
              </div>
              <div class="input-box">
                <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                <input type="password" name="password" required>
                <label for="">Contraseña</label>
              </div>
              <div class="remember-forgot">
                <label><input type="checkbox">acepto los terminos y condiciones</label>
              </div>
              <button type="submit" class="btn">Registrarse</button>
              <div class="login-register">
                <p>ya tengo Cuenta!<a href="#" class="login-link">Login</a></p>
              </div>
            </form>
          </div>
        </div>
      
        <script src="../js/script.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  </body>
</html>
