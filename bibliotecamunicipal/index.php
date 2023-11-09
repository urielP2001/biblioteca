
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Biblioteca Popular Coronda</title>
  <link rel="stylesheet" href="css/style.css?v1.1.2">
  <link rel="stylesheet" href="css/whatsapp.css?v1.1">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> -->
  <script src="https://kit.fontawesome.com/8697250bf3.js" crossorigin="anonymous"></script>
  <style>
    .header{
    background-image: linear-gradient(
        rgba(0,0,0,0.7),
        rgba(0,0,0,0.7)), url(img/menu2.jpg);
    background-position: center bottom;
    background-repeat: no-repeat;
    background-size: cover;
    min-height: 100vh;
    display: flex;
    align-items: center;
}
  </style>
</head>
<body>
 
<a href="https://api.whatsapp.com/send?phone=3466400909&text=Hola!%20Quisiera%20m%C3%A1s%20informaci%C3%B3n!." class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>
  <header class="header" id="Inicio">
    <div class="menu container" id="menu1">
      <a href="#" class="logo">logo</a>
      <input type="checkbox" id="menu">
      <label for="menu">
        <img src="img/menu.png" class="menu-icono" alt="">
      </label>
      <nav class="navbar">
        <ul>
          <li><a href="#Inicio">Inicio</a></li>
          <li><a href="#actividades">Actividades</a></li>
          <li><a href="#services">Servicios</a></li>
          <li><a href="#blog">Sobre nosotros</a></li>
          <li><a href="#pie-pagina">Contacto</a></li>
          <button class="btnlogin-popup" onclick="location.href='views/v_login.php'">Login</button>
        </ul>
      </nav>

    </div>
    <div class="header-content container">

      <h1>Biblioteca Popular <br> "Coronel José Rodríguez" <br> Coronda</h1>
      <p>
      "La Biblioteca no es una suma de libros, es un organismo vivo con vida autónoma". <span>- Umberto Eco, La memoria  vegetal.</span>
      </p>
      <a href="#actividades" class="btn-1">Informacion</a>
    </div>
    
    
  </header>
  

  <section class="coffee" id="actividades">
    <!-- <img src="img/bg2.png" alt=""> -->

    <div class="coffee-content container">
      <h2>noticias de la institución</h2>
      <!-- <p class="txt-p">
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
         Consequatur voluptate officia rerum nemo qui quia nostrum vero ullam sunt,
          perferendis omnis nam minima facilis neque accusamus obcaecati fugit provident incidunt.
      </p> -->
      <div class="row">
        <div class="col-6">
          <div class="coffee-group">
            <?php include "controller/ultimasnoticias.php"?>
          </div>
          <a href="views/noticias.php" class="btn-1" id="services">Informacion</a>
        </div>

      </div>
      
    
    </div>
  </section>
  <section class="coffee" id="actividades">

    <div class="coffee-content container">
      <h2>actividades de la institución</h2>
      <div class="row">
        <div class="col-6">
          <div class="coffee-group">
            <?php include "controller/ultimasact.php"?>
          </div>
          <a href="views/actividades.php" class="btn-1" id="services">Informacion</a>
        </div>

      </div>
      
    </div>
  </section>

  

  <main class="services">
  <h2 id="h2">servicios que ofrecemos</h2>

  <section>
      
      <div class="row">
        <div class="column">
          <div class="card">
            <div class="icon-wrapper">
            <!-- <i class="fa-solid fa-book"></i> -->
            </div>
                  <p>➮Diversos talleres.</p>
                  <p>➮Préstamos de libros a domicilio.</p>
                  <p>➮Préstamo de material bibliográfico para consultar en sede.</p>
                  <p>➮Préstamo de CD y DVD</p>
                  <p>➮Préstamos de lectores digitales, con cincuenta y siete libros cada uno.<p>
                  <p>➮Préstamos de computadoras y/o Notebooks dentro de la institución.</p>
                  <p>➮Material bibliográfico actualizado permanentemente en distintas áreas de conocimiento.</p>
                  <p>➮Material sobre Historia y Literatura Local. Difusión de autores locales.</p>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <div class="icon-wrapper">
              <!-- <i class="fas fa-brush"></i> -->
            </div>
            <p>➮Rincón infantil y de literatura juvenil.</p>
                    <p>➮Mesas de trabajo y de lectura.</p>
                    <p>➮Espacios de lectura al aire libre.</p>
                    <p>➮Hemeroteca.</p>
                    <p>➮Área inclusiva: -Audiolibros y peliculas descriptivas para no videntes. -Videos con cuentos narrados en lenguaje de señas.</p>
                    <p>➮Libros infantiles para niños con dislexia.</p>
                    <p>➮Conservación del edificio: Declarado Patrimonio arquitectónico de la ciudad.</p>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <div class="icon-wrapper">
              <!-- <i class="fas fa-wrench"></i> -->
            </div>
            <p>➮Servicio de WIFI.</p>
                <p>➮Servicio de fotocopiado.</p>
                <p>➮Disponibilidad de uso de un escáner especial para la digitalización de
                documentos,que permite la preservación y archivo de nuestra historia local.</p>
                <p>➮Adquisiciones anuales de libros, brindando al socio la posibilidad de
                sugerir las obras o temáticas de su preferencia.</p>
                <p>➮Realización de actividades de extensión comunitaria: donaciones, cuentos viajeros, talleres, etc.</p>
                <p>➮Asesoramiento a cargo de personal especializado en Bibliotecología.</p>
          </div>
        </div>
      </div>
  </section>

  </main>



  <section class="blog container" id="blog">
    <h2 class="titulo">sobre nosotros</h2>

    <div class="blog-content">
      <div class="blog-1">
        <img src="img/menu2.jpg" alt="">
        <h3>Establecimiento</h3>
        <p>
        La Biblioteca Popular “Coronel José Rodríguez” fue fundada el 1 de octubre de 1912, siendo su primer Presidente Don Eudocio Giménez. Se encuentra ubicada en el centro urbano de la ciudad de Coronda, provincia de Santa Fe, frente a la Plaza principal, alrededor de la cual se sitúan otros edificios históricos como la Jefatura Policial, la Iglesia, la Municipalidad, entre otras. Cuenta con un edificio propio que fue donado por el Dr. Martín Rodríguez Galisteo, hijo del Coronel Rodríguez.
        Con 110 años al servicio de la comunidad corondina y de localidades vecinas, es la única Biblioteca Pública de nuestra ciudad, convirtiéndose a través de los años en un puente hacia la cultura, la información, la igualdad. 
        Nuestra institución posee un total aproximado de 30.000 obras (libros, periódicos, revistas, material audiovisual). El acervo bibliográfico abarca temáticas y géneros variados y está destinado a una amplia franja etaria. 
        </p>
      </div>
      <div class="blog-1">
        <img src="img/fundador2.jpg" alt="">
        <h3>Fundador</h3>
        <p>
        CORONEL JOSÉ RODRÍGUEZ

        Nació en Coronda el 2 de setiembre de 1813. Hijo de Doña Celestina Ortiz de Vergara y del Comandante José Rodríguez, casado con Doña Rosa Galisteo.
        En 1838 se desempeñó como Juez Comisario de Campaña del Distrito Colastiné Dpto. Coronda. En 1842, a las órdenes de López, Gobernador de la Provincia, enfrentó a las fuerzas federales de Rosas. En 1845, la provincia le confirió el cargo de Capitán de Caballería de Línea.
        En 1852 participó en la Batalla de Caseros regresando con el grado de Teniente Coronel Graduado de Caballería. Posteriormente es nombrado Comandante Militar del Departamento Coronda y luego Jefe de Policía de Santa Fe. 
        En 1854 se lo designa Comandante General de la Frontera Norte de la Provincia de Santa Fe.
        Dos años más tarde, actuó como Gobernador Delegado. En 1859 se incorporó al Ejército de la Confederación participando en las batallas de Cepeda y de Pavón. 
        Siendo Jefe Político del Departamento Coronda, luego de la muerte de Urquiza realiza las gestiones pertinentes para erigir en el centro de la Plaza de Coronda el primer monumento a su memoria en el país.
        Senador por el Departamento San Jerónimo por segunda vez en 1881, hace construir las primeras salas para el Hospital de Caridad, el que se inauguró en 1883, años en que fue reincorporado por el Gobierno de la Nación como Coronel de Caballería de Línea.
        Falleció en Santa Fe el 9 de octubre de 1893; respetando su voluntad sus restos fueron trasladados a Coronda, descansando en la nave central del Templo de su ciudad natal.
        </p>
      </div>
      <!-- <div class="blog-1">
        <img src="img/menu2.jpg" alt="">
        <h3>Miembros directivos</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. 
          Praesentium quis nostrum ducimus, omnis nesciunt ipsa, quam incidunt atque dolore hic deleniti dolor facilis? 
          Eum, molestiae quo saepe dolores et perferendis?
        </p>
      </div> -->
    </div>
    <!-- <a href="#" class="btn-1">Informacion</a> -->
  </section>

  <!-- <footer class="footer" id="footer">
    <div class="footer-content container">
      <div class="link">
        <h3>Contactos</h3>
        <ul>
          <li><a href="#" class="fa fa-facebook"></a></li>
          <li><a href="#" class="fa fa-instagram"></a></li>
          <li><a href="#" class="">loren</a></li>
          <li><a href="#" class="">loren</a></li>
        </ul>
      </div>
      <div class="link">
        <h3>loren</h3>
        <ul>
          <li><a href="">loren</a></li>
          <li><a href="">loren</a></li>
          <li><a href="">loren</a></li>
          <li><a href="">loren</a></li>
        </ul>
      </div>
      <div class="link">
        <h3>loren</h3>
        <ul>
          <li><a href="">loren</a></li>
          <li><a href="">loren</a></li>
          <li><a href="">loren</a></li>
          <li><a href="">loren</a></li>
        </ul>
      </div>
      <div class="link">
        <h3>loren</h3>
        <ul>
          <li><a href="">loren</a></li>
          <li><a href="">loren</a></li>
          <li><a href="">loren</a></li>
          <li><a href="">loren</a></li>
        </ul>
      </div>
    </div>
    <div class="grupo-2">
      <small>&copy; 2023 <b>biblioteca popular</b> - todos los derechos reservados.</small>

    </div>
  </footer> -->
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
  <script>
    window.addEventListener("scroll", function(){
      var menu1 = document.getElementById("menu1");
      menu1.classList.toggle("sticky", window.scrollY > 0)
    })
  </script>
  </script>
  <script src="script.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>