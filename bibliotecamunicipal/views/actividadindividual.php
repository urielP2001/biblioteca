<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Biblioteca Popular Coronda</title>
  <link rel="stylesheet" href="../css/noticiaindividual.css?v1.3">
  <link rel="stylesheet" href="../css/whatsapp.css">
  <script src="https://kit.fontawesome.com/8697250bf3.js" crossorigin="anonymous"></script>
</head>
<body>
<header class="header" id="Inicio">
    <div class="menu container">
      <a href="#" class="logo">logo</a>
      <input type="checkbox" id="menu">
      <label for="menu">
        <img src="../img/menu.png" class="menu-icono" alt="">
      </label>
      <nav class="navbar">
        <ul>
          <li><a href="../#inicio">Inicio</a></li>
          <li><a href="../#actividades">actividades</a></li>
          <li><a href="../#services">Servicios</a></li>
          <li><a href="../#blog">sobre nosotros</a></li>
          <li><a href="../#pie-pagina">Contacto</a></li>
          <button class="btnlogin-popup" onclick="location.href='../views/v_login.php'">Login</button>
        </ul>
      </nav>

    </div>
</header>

<section class="coffee" id="actividades">
  <div class="coffee-content container">

    <div class="coffee-group">

      <?php include "../controller/c_actunicas.php";?>

    </div>

  </div>
</section>
<footer class="pie-pagina" id="pie-pagina">
    <div class="grupo-1">
        <div class="ubicacion">
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3384.5085431707503!2d-60.918017224421995!3d-31.97422697400944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95b5bfa3856182f3%3A0x7c1f93e82e18a195!2sBiblioteca%20Popular%20Cnel.%20Jos%C3%A9%20Rodr%C3%ADguez!5e0!3m2!1ses!2sar!4v1686785853961!5m2!1ses!2sar" width="350" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="box">
            <h2>UBICACIÓN - Horarios de atención</h2>
            <p>España 1815, Coronda, Argentina</p>
            <p>Lunes a viernes 9:00-12:00
              14:30-17:30</p>
              <p></p>
        </div>
        <div class="box">
            <h2>SIGUENOS</h2>
            <div class="red-social">
                <a href="https://www.facebook.com/bibliotecacoronda" class="fa fa-facebook"></a>
                <a href="https://www.instagram.com/bibliocoronda/" class="fa fa-instagram"></a>
                <a href="https://www.youtube.com/@bibliotecapopularcoroneljo3821" class="fa fa-youtube"></a>
            </div>
        </div>
    </div>
    <div class="grupo-2">
        <small>&copy; 2023 <b>Biblioteca Popular</b> - Todos los Derechos Reservados.</small>
    </div>
  </footer>

     

</body>