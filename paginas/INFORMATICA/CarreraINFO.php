<!DOCTYPE html>
<html>
<?php include('head.php'); ?>
  <body>

  <?php include('header.php'); ?>
    


  <div class="container" id="contenido">
  
  <img class="img-fluid" style="display: block; margin-left: auto; margin-right: auto; margin-top: 100px;" src="../../img/Informatica.png">
  <h4 class="display-6" id="perfil" style="margin-top: 50px;"> Introducción </h4>
  <p style="text-align: justify;">
   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem ratione repudiandae omnis maiores quasi veritatis nam earum voluptatibus asperiores! Mollitia dicta, quis dignissimos incidunt praesentium sapiente eum ipsum illum omnis.
   Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod dignissimos aliquam repellat dolor laboriosam tempora eaque quia debitis eos. Inventore laudantium officiis libero obcaecati, illo totam iure beatae neque recusandae.
   Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem ex deserunt sunt voluptatibus explicabo harum, iure nemo, tempora dicta qui voluptatem laborum similique cupiditate odit mollitia saepe inventore quas ab.
   Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam reiciendis hic iure quidem voluptatem facere iusto! Tempore culpa animi esse repellat amet harum sed, id, aliquam dolore itaque quae similique?
  </p>

  <h4 class="display-6"> Sobre la carrera</h4>
  <p style="text-align: justify;">
   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem ratione repudiandae omnis maiores quasi veritatis nam earum voluptatibus asperiores! Mollitia dicta, quis dignissimos incidunt praesentium sapiente eum ipsum illum omnis.
   Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod dignissimos aliquam repellat dolor laboriosam tempora eaque quia debitis eos. Inventore laudantium officiis libero obcaecati, illo totam iure beatae neque recusandae.
   Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem ex deserunt sunt voluptatibus explicabo harum, iure nemo, tempora dicta qui voluptatem laborum similique cupiditate odit mollitia saepe inventore quas ab.
  
  </p>

<div class="text-center">
<a href="../../paginas/DepSistemas.php" >
  <img src="../../img/DepartamentoLogo.png" class="img_fluid" height="200px" width="200px">
  <h4> Regresar al departamento</h4>  
</a>
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