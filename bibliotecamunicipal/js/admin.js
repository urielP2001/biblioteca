document.addEventListener("DOMContentLoaded", function() {
  const showNavbar = (toggleId, navId, bodyId, headerId) => {
    const toggle = document.getElementById(toggleId),
      nav = document.getElementById(navId),
      bodypd = document.getElementById(bodyId),
      headerpd = document.getElementById(headerId);

    // Validar que todas las variables existan
    if (toggle && nav && bodypd && headerpd) {
      toggle.addEventListener('click', () => {
        // mostrar el navbar
        nav.classList.toggle('show');
        // cambiar el ícono
        toggle.classList.toggle('bx-x');
        // añadir padding al body
        bodypd.classList.toggle('body-pd');
        // añadir padding al header
        headerpd.classList.toggle('body-pd');
      });
    }
  }

  showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header');

  // Obtener todos los enlaces
  var links = document.querySelectorAll(".nav_link");

  // Obtener todos los elementos de contenido
  var contents = document.querySelectorAll(".content");

  // Función para mostrar el contenido correspondiente
  function showContent(target) {
    // Obtener el elemento con el ID objetivo
    var content = document.getElementById(target);

    // Verificar si el elemento existe
    if (content) {
      // Ocultar todos los elementos de contenido
      contents.forEach(function(content) {
        content.style.display = "none";
      });

      // Mostrar el contenido correspondiente al target
      content.style.display = "block";
    }
  }

  // Función para cambiar la apariencia del enlace activo
  function setActiveLink() {
    links.forEach(function(link) {
      link.classList.remove('active');
    });
    this.classList.add('active');
  }

  // Iterar sobre cada enlace
  links.forEach(function(link) {
    link.addEventListener("click", function(e) {
      e.preventDefault(); // Evitar recarga de página

      // Obtener el valor del atributo data-target del enlace
      var target = this.getAttribute("data-target");

      // Mostrar el contenido correspondiente al enlace clicado
      showContent(target);

      // Cambiar la apariencia del enlace activo
      setActiveLink.call(this);
    });
  });
});

document.addEventListener("DOMContentLoaded", function() {
  // Obtener todos los enlaces
  var links = document.querySelectorAll(".nav_link");

  // Obtener el último enlace seleccionado almacenado en localStorage
  var lastSelectedLink = localStorage.getItem("lastSelectedLink");

  // Función para mostrar el contenido correspondiente
  function showContent(target) {
    // Obtener el elemento con el ID objetivo
    var content = document.getElementById(target);

    // Verificar si el elemento existe
    if (content) {
      // Ocultar todos los elementos de contenido
      var contents = document.querySelectorAll(".content");
      contents.forEach(function(content) {
        content.style.display = "none";
      });

      // Mostrar el contenido correspondiente al target
      content.style.display = "block";
    }
  }

  // Función para cambiar la apariencia del enlace activo
  function setActiveLink(link) {
    links.forEach(function(link) {
      link.classList.remove('active');
    });
    link.classList.add('active');
  }

  // Iterar sobre cada enlace
  links.forEach(function(link) {
    link.addEventListener("click", function(e) {
      e.preventDefault(); // Evitar recarga de página

      // Obtener el valor del atributo data-target del enlace
      var target = this.getAttribute("data-target");

      // Mostrar el contenido correspondiente al enlace clicado
      showContent(target);

      // Cambiar la apariencia del enlace activo
      setActiveLink(this);

      // Guardar el último enlace seleccionado en localStorage
      localStorage.setItem("lastSelectedLink", this.getAttribute("data-target"));
    });

    // Verificar si el enlace actual es el último enlace seleccionado
    if (lastSelectedLink === link.getAttribute("data-target")) {
      // Mostrar el contenido correspondiente al enlace actual
      var target = link.getAttribute("data-target");
      showContent(target);

      // Cambiar la apariencia del enlace activo
      setActiveLink(link);
    }
  });
});
