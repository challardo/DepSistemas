<!DOCTYPE html>
<html>
<?php include('head.php') ?>
  <body>
  <?php include('header.php'); ?>

<!--Contenido-->
<div class="container" style="margin-top: 100px; margin-bottom: 100px;">



  
  
<h1> Misión</h1>
<p>Formar ingenieros en sistemas utilizando modelos educativos de vanguardia con una orientación analítica y humana que les permita ser competitivos, éticos y que estén comprometidos con el desarrollo sustentable.</p>

<h1> Visión</h1>
<p>Ser un departamento que integre la docencia, la vinculación y la investigación, para la formación de ingenieros que respondan a los retos en la generación de bienes y servicios de clase mundial.</p>

<a class="btn btn-outline-dark" href="CarreraISC.php">Regresar</a>
</div>
<!--Contenido fin-->

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

