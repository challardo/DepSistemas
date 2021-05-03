
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <title>Dept. Sistemas Computacionales</title>
    <link rel="shortcut icon" href="../img/DepartamentoLogo.png" />
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style6.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@700&display=swap" rel="stylesheet">
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    
  </head>
<body>
<!--Aqui empieza el menu navbar (este va en todas las paginas)-->
    <!-- 
fixed
-->

<nav id="navegaciongob" class="navbar  navbar-expand-lg navbar-dark fixed-top" >
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="../img/logogob.svg" width="100" height="50" class="d-inline-block align-text-left">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav  mb-2 mb-lg-0 ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Trámites</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Gobierno</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"> 
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
              <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
          </a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>

<!-- Segundo header, logos educacion, tecnm y tec -->

<div class="container  header-2" style="margin-top: 60px;">
<a href="https://educacion.gob.mx">
  <img class="img-responsive" src='../img/logo-educacion.svg' >
</a>
  <img class="img-responsive" src='../img/linea-vertical-separador-logos.svg' />

<a href="https://tecnm.mx">
  <img class="img-responsive" src='../img/logo-tecnm.svg'  />
</a>
  <img class="img-responsive" src='../img/linea-vertical-separador-logos.svg' />

  <a href="https://www.tijuana.tecnm.mx/">
  <img class="img-responsive" src='../img/logo_TECT.png'  />
  </a>
  


</div>

    
  </div>
  
  
</div>
<!-- 
static
-->
<div class="sticky-top ">
  <nav id="navegacion" class="navbar  navbar-expand-lg navbar-dark ">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
       
        
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText2" aria-controls="navbarText2" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse dropdown-menu-right" id="navbarText2">
       
        <ul class="navbar-nav">
         

          <li class="nav-item dropdown" id="myDropdown">
            <a class="nav-link dropdown-toggle disabled" href="#" data-bs-toggle="dropdown">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
              </svg>
              Inicio  </a>
            <ul class="dropdown-menu  ">
              <li> <a class="dropdown-item" href="../paginas/INICIO_mision_vision.php"> Misión y visión </a></li>
              <li> <a class="dropdown-item" href="../paginas/INICIO_valores.php">Valores  </a> </li>
              <li> <a class="dropdown-item" href="../paginas/INICIO_ObjetivosEducacionales.php">Objetivos educacionales  </a> </li>
              <li> <a class="dropdown-item" href="../paginas/INICIO_PlanDesarolloDep.php">Plan de desarrollo departamental  </a> </li>
              <li> <a class="dropdown-item" href="../paginas/INICIO_AtributosEgresado.php">Atributos del egresado  </a> </li>
              <li> <a class="dropdown-item" href="../paginas/INICIO_Organigrama.php">Organigrama  </a> </li>
              <li> <a class="dropdown-item" href="../paginas/INICIO_PlanReticular.php">Plan reticular  </a> </li>
              <li> <a class="dropdown-item" href="#">General   
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                </svg>
              </a>
                <ul class="submenu dropdown-menu">
                  <li><a class="dropdown-item" href="../paginas/INICIO_PlanContingencia.php">Plan de contingencia</a></li>  
              </li>
             
              </ul>
          </li>
        </ul>

          <li class="nav-item active"> <a class="nav-link disabled" href="../paginas/noticias.php">Noticias </a> </li>

          <li class="nav-item dropdown" id="myDropdown">
            <a class="nav-link dropdown-toggle disabled" href="#" data-bs-toggle="dropdown">
            Estudiantes  
            </a>
            <ul class="dropdown-menu">
              <li> <a class="dropdown-item" href="../paginas/ESTUDIANTES_creditos.php"> Créditos </a></li>
              <li> <a class="dropdown-item" href="../paginas/ESTUDIANTES_servicioSocial.php">Servicio Social </a> </li>
              <li> <a class="dropdown-item" href="../paginas/ESTUDIANTES_convocatoria.php">Convocatoria </a> </li>
              <li> <a class="dropdown-item" href="../paginas/ESTUDIANTES_matriculaEstudiante.php">Matricula de estudiantes </a> </li>
              <li> <a class="dropdown-item" href="../paginas/ESTUDIANTES_NuevoIngreso.php">Nuevo ingreso  </a> </li>
              </ul>
          </li>

          <li class="nav-item dropdown" id="myDropdown">
            <a class="nav-link dropdown-toggle disabled" href="#" data-bs-toggle="dropdown">
            Docentes 
            </a>
            <ul class="dropdown-menu">
              <li> <a class="dropdown-item" href="../paginas/DOCENTES_calendario.php"> Calendario </a></li>
              <li> <a class="dropdown-item" href="../paginas/DOCENTES_bienvenida.php">Bienvenida </a> </li>
              <li> <a class="dropdown-item" href="../paginas/DOCENTES_gestionFormatos.php">Gestión y formatos </a> </li>
              <li> <a class="dropdown-item" href="../paginas/DOCENTES_profesores.php">Profesores </a> </li>
              <li> <a class="dropdown-item" href="../paginas/DOCENTES_gestionCurso.php">Gestión del curso  </a> </li>
              <li> <a class="dropdown-item" href="../paginas/DOCENTES_Cevaluacion.php">Criterios de evaluación </a> </li>
              <li> <a class="dropdown-item" href="../paginas/DOCENTES_Ievaluacion.php">Instrumentos de evaluación  </a> </li>
              <li> <a class="dropdown-item" href="../paginas/DOCENTES_programasEstudio.php">Programas de estudio  </a> </li>
              </ul>
          </li>

          <li class="nav-item dropdown" id="myDropdown">
            <a class="nav-link dropdown-toggle disabled" href="#" data-bs-toggle="dropdown">
           Vinculación
            </a>
            <ul class="dropdown-menu">
              <li> <a class="dropdown-item" href="../paginas/VINCULACION_contacto.php"> Contacto</a></li>
              </ul>
          </li>

          <li class="nav-item dropdown" id="myDropdown">
            <a class="nav-link dropdown-toggle disabled" href="#" data-bs-toggle="dropdown">
          Laboratorios
            </a>
            <ul class="dropdown-menu">
              <li> <a class="dropdown-item" href="../paginas/LABORATORIOS_manuales.php"> Manuales</a></li>
              </ul>
          </li>

          <li class="nav-item dropdown" id="myDropdown">
            <a class="nav-link dropdown-toggle disabled" href="#" data-bs-toggle="dropdown">
           Investigación
            </a>
            <ul class="dropdown-menu">
              <li> <a class="dropdown-item" href="../paginas/INVESTIGACION_convocatorias.php"> Convocatorias</a></li>
              </ul>
          </li>

          <li class="nav-item dropdown" id="myDropdown">
            <a class="nav-link dropdown-toggle disabled" href="#" data-bs-toggle="dropdown">
            Posgrado
            </a>
            <ul class="dropdown-menu">
              <li> <a class="dropdown-item" href="../paginas/POSGRADO_convocatorias.php"> Convocatorias </a></li>
              <li> <a class="dropdown-item" href="#">Lineas de investigación <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
              </svg> </a>
                <ul class="submenu dropdown-menu">
                  <li><a class="dropdown-item" href="#">Sistemas de manufactura</a></li> 
                <li><a class="dropdown-item" href="#">Manufactura inteligente</a></li>  </ul>
              </li>

              <li> <a class="dropdown-item" href="../paginas/POSGRADO_coordinacion.php">Coordinación </a> </li>
              <li> <a class="dropdown-item" href="#">Estudiantes <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
              </svg> </a> <ul class="submenu dropdown-menu">
                <li><a class="dropdown-item" href="../paginas/POSGRADO_matricula.php">Matricula</a></li> 
                <li><a class="dropdown-item" href="../paginas/POSGRADO_egresados.php">Egresados</a></li>
                 </ul> 
              </li>

              <li> <a class="dropdown-item" href="#">Programa de estudios <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
              </svg> </a> <ul class="submenu dropdown-menu">
                <li><a class="dropdown-item" href="../paginas/POSGRADO_perfilIngreso.php">Perfil de ingreso</a></li> 
                <li><a class="dropdown-item" href="../paginas/POSGRADO_perfilEgreso.php">Perfil de egreso</a></li>
               </ul> </li>

              <li> <a class="dropdown-item" href="#">Investigación <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
              </svg> </a> <ul class="submenu dropdown-menu">
                <li><a class="dropdown-item" href="../paginas/POSGRADO_consejoPosgrado.php">Consejo de posgrado</a></li>  </ul> </li>

              <li> <a class="dropdown-item" href="../paginas/POSGRADO_procedimientos.php">Procedimientos  </a> </li>
             
              </ul>
          </li>

        </ul>
        
      </div>
    </div>
  </nav>
</div>
    
<!-- Aqui termina el menu de arriba (este va en todas las paginas)-->


<!--Remaining section-->
<div class="container" style="margin-top: 100px; margin-bottom: 100px;"> 
<h1> Lineas de Investigación</h1>
<hr>
<h2>Maestrías: </h2>
<p> <a target="_Blank" href="https://www.tijuana.tecnm.mx/maestria-en-ciencias-de-la-computacion/">Maestría en Ciencias de la Computación (PNPC-CONACyT) </a></p> 
<p> <a target="_Blank" href="https://cgiqtectijuana.mx/?page_id=119">Maestría en Ciencias en Química (PNPC-CONACyT)</a> </p> 
<p> <a target="_Blank" href="https://mcitectijuana.mx/">Maestría en Ciencias de la Ingeniería (PNPC-CONACyT)</a> </p> 
<p> <a target="_Blank" href="https://www.tijuana.tecnm.mx/maestria-en-administracion/">Maestría en Administración</a> </p> 
<p> <a target="_Blank" href="http://www.ingenieriaindustrialitt.org/posgrado">Maestría en Ingeniería Industrial</a> </p> 
<p> <a target="_Blank" href="https://www.tijuana.tecnm.mx/maestria-en-tecnologias-de-la-informacion/">Maestría en Tecnologías de la Información</a> </p> 

<h2>Doctorados: </h2>
<p> <a target="_Blank" href="https://www.tijuana.tecnm.mx/doctorado-en-ciencias-en-computacion-2/">Doctorado en Ciencias en Computación (PNPC-CONACyT)</a> </p> 
<p> <a target="_Blank" href="https://cgiqtectijuana.mx/?page_id=121">Doctorado en Ciencias en Química (PNPC-CONACyT)</a> </p> 
<p> <a target="_Blank" href="https://dcitectijuana.mx/">Doctorado en Ciencias de la Ingeniería (PNPC-CONACyT)</a> </p> 


<a class="btn btn-outline-dark" href="CarreraISC.php">Regresar</a>
</div>

<footer class="bg-light text-center text-lg-start">
  <!-- Grid container -->
  <div class="container p-4">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h1 style="margin-bottom: 30px; text-align: center;"> Contactanos</h1>
        <ul>
        <li>
            <div class="row">
              <div class="col-sm-1">
                <img src="../img/clipboard-data.svg"  height="30px" width="30px">
              </div>
             <div class="col">
              <p><strong>Jefa de departamento</strong> <br/> 
                Dra. María de los Ángeles Quezada Cisnero
              </p>
            </div>
          </div>
      
          </li>
          <li>
            <div class="row">
              <div class="col-sm-1">
                <img src="../img/envelope-fill.svg" height="30px" width="30px">
              </div>
             <div class="col">
              <p><strong>Correo Departamento</strong> <br/> 
              angeles.quezada@tectijuana.edu.max
              </p>
            </div>
          </div>
            
          </li>
          <li>
            <div class="row">
              <div class="col-sm-1">
                <img src="../img/clipboard-data.svg" height="30px" width="30px">
              </div>
             <div class="col">
              <p><strong>Teléfono</strong> <br/> 
               (664)-607-8400 ext. 139
              </p>
            </div>
          </div>
          </li>
          <!--
          <li>
            <div class="row">
              <div class="col-sm-1">
                <img src="../../img/clipboard-data.svg" height="30px" width="30px">
              </div>
             <div class="col">
              <p><strong>Secretaria Vespertina</strong> <br/> 
                Margarita Valencia Calles
              </p>
            </div>
          </div>
          </li>
          <li>
            <div class="row">
              <div class="col-sm-1">
                <img src="../../img/envelope-fill.svg" height="30px" width="30px">
              </div>
             <div class="col">
              <p><strong>Correo de secretaria</strong> <br/> 
                secretaria.sistemas@tectijuana.edu.mx
              </p>
            </div>
          </div>
          </li>
-->
         
        </ul>
     
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h1 style="margin-bottom: 30px; text-align: center;"> Herramientas</h1>
        <div class="row" style="text-align: center;">
          <div class="col">
            <img src="../img/pencil-fill.svg" height="50px" width="50px">
            <p><strong>Cursos</strong> <br/> 
              Cursos en linea para licenciatura y maestria
            </p>
          </div>
         <div class="col" style="text-align: center;">
          <img src="../img/clipboard-data.svg"  height="50px" width="50px">
          <p><strong>Proyectos</strong> <br/> 
            Proyectos utilizando herramientas esbeltas
          </p>
        </div>
      </div>
        <ul>
          
        </ul>
      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
  
   <!-- Grid container -->
   <div class="container p-4">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h1 style="margin-bottom: 30px; text-align: center;"> Direccion</h1>

        <p style="text-align: center;">Instituto Tecnológico de Tijuana Calzada <br/> Del Tecnológico S/N, Fraccionamiento <br/> Tomas Aquino. Tijuana, Baja California. C.P. <br/> 22414</p>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13455.56473708119!2d-116.9872001!3d32.5290531!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x281526cf22a3e2cc!2sInstituto%20Tecnol%C3%B3gico%20de%20Tijuana!5e0!3m2!1ses!2smx!4v1619494280955!5m2!1ses!2smx" width="415" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  
      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->

</footer>
<!--Footer #2 es el del gobierno-->
<footer class=" text-light text-center text-lg-start" id="footergob">
  <!-- Grid container -->
  <div class="container p-4">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <img src="../img/logogob.svg">
        
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase mb-0">Enlaces</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!" class="text-dark">Participa</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Publicaciones Oficiales</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Marco Juridico</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Plataforma Nacional de transparencia</a>
          </li>
        </ul>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase">¿Qué es gob.mx?</h5>

        <ul class="list-unstyled  mb-0">
          <li>
            <p>Es el portal único de trámites, información y participación ciudadana. Leer mas: </p>
            <a href="#" class="text-dark"></a>
          </li>
          <li>
            <a href="#!" class="text-dark">Portal de datos abiertos</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Declaracion de accesibilidad</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Aviso de privacidad simplificado</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Aviso de privacidad integral</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Terminos y Condiciones</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Politica de seguridad</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Mapa del sitio</a>
          </li>
         
        </ul>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        

        <ul class="list-unstyled">
          <li>
            <a href="#!" class="text-dark">Denuncia contra servidores</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Publicos</a>
          </li>
          <li>
            <p>Siguenos en:</p>
            <a href="#!" class="text-dark">Facebook</a>
            <a href="#!" class="text-dark">Twitter</a>
          </li>
          <li>
            
          </li>
        </ul>
      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->

</footer>

<footer> 

  <div class="text-center p-3" style="color: white;">
    © 2021 Copyright:
    <a class="text-white" href="#">carlitoscool.com</a>
    <a id="back-to-top" href="#" class=" float-right  back-to-top" role="button">
      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
      </svg>
    </a>
  </div>
 
</footer>
</body>
</html>



<!-- Este script es para el menu de acordion de mutinivel-->
<script>
  document.addEventListener("DOMContentLoaded", function(){
// make it as accordion for smaller screens
if (window.innerWidth < 992) {

  // close all inner dropdowns when parent is closed
  document.querySelectorAll('.navbar .dropdown').forEach(function(everydropdown){
    everydropdown.addEventListener('hidden.bs.dropdown', function () {
      // after dropdown is hidden, then find all submenus
        this.querySelectorAll('.submenu').forEach(function(everysubmenu){
          // hide every submenu as well
          everysubmenu.style.display = 'none';
        });
    })
  });

  document.querySelectorAll('.dropdown-menu a').forEach(function(element){
    element.addEventListener('click', function (e) {
        let nextEl = this.nextElementSibling;
        if(nextEl && nextEl.classList.contains('submenu')) {	
          // prevent opening link if link needs to open dropdown
          e.preventDefault();
          if(nextEl.style.display == 'block'){
            nextEl.style.display = 'none';
          } else {
            nextEl.style.display = 'block';
          }

        }
    });
  })
}
// end if innerWidth
}); 
// DOMContentLoaded  end
</script>