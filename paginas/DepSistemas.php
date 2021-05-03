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

  <?php include('header.php'); ?>
    


  <div class="container" id="contenido">
  
  <img class="img-fluid" style="display: block; margin-left: auto; margin-right: auto; margin-top: 100px;" src="../img/DepSistemasLogo.png">
  <h4 class="display-6" id="perfil" style="margin-top: 50px;"> Introducción </h4>
  <p style="text-align: justify;">
   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem ratione repudiandae omnis maiores quasi veritatis nam earum voluptatibus asperiores! Mollitia dicta, quis dignissimos incidunt praesentium sapiente eum ipsum illum omnis.
   Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod dignissimos aliquam repellat dolor laboriosam tempora eaque quia debitis eos. Inventore laudantium officiis libero obcaecati, illo totam iure beatae neque recusandae.
   Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem ex deserunt sunt voluptatibus explicabo harum, iure nemo, tempora dicta qui voluptatem laborum similique cupiditate odit mollitia saepe inventore quas ab.
   Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam reiciendis hic iure quidem voluptatem facere iusto! Tempore culpa animi esse repellat amet harum sed, id, aliquam dolore itaque quae similique?
  </p>

  <h4 class="display-6"> Sobre el departamento</h4>
  <p style="text-align: justify;">
   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem ratione repudiandae omnis maiores quasi veritatis nam earum voluptatibus asperiores! Mollitia dicta, quis dignissimos incidunt praesentium sapiente eum ipsum illum omnis.
   Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod dignissimos aliquam repellat dolor laboriosam tempora eaque quia debitis eos. Inventore laudantium officiis libero obcaecati, illo totam iure beatae neque recusandae.
   Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem ex deserunt sunt voluptatibus explicabo harum, iure nemo, tempora dicta qui voluptatem laborum similique cupiditate odit mollitia saepe inventore quas ab.
  
  </p>


<div id="mas" style="font-style: italic;" class="text-center p-5" >
  Para mas informacion visitiar el sitio oficial del Tecnologico de Tijuana:
  <a target="_blank"  href="https://www.tijuana.tecnm.mx/ing-en-sistemas-computacionales/">Ing. Sistemas Computacionales</a>
</div>

<hr>
<h4 class="display-6" style="margin-bottom: 50px;"> Las carreras que ofrece este departamento:</h4>
<div class="row" style="text-align: center;">
<div class="col" >
  <a href="../paginas/ISC/CarreraISC.php">
  <img src="../img/ISCLogo.png" class="img_fluid" height="200px" width="200px">
  <h4> Sistemas Computacionales</h4>
</a>
</div>
<div class="col">
  <a href="../paginas/TICS/CarreraTICS.php">
  <img src="../img/TicsLogo.png" class="img_fluid" height="200px" width="200px">
  <h4> Tics</h4>
</a>
</div>
<div class="col">
  <a href="../paginas/INFORMATICA/CarreraINFO.php">
  <img src="../img/InformaticaLogo.png" class="img_fluid" height="200px" width="200px">
  <h4>Informatica</h4>
</a>
</div> 

</div>

</div>
<hr>


<?php include('footer.php'); ?>

</body>









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
</html>


