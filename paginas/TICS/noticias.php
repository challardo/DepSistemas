
<!DOCTYPE html>
<html>
<?php include('head.php') ?>
<body>
    <?php include('header.php'); ?>

<!--Remaining section-->
<div class="container" style="margin-top: 100px; margin-bottom: 100px;"> 
<h1> Noticias</h1>


<?php include('../../paginas/contenidoNoticias.php'); ?>

<a class="btn btn-outline-dark" href="CarreraTICS.php">Regresar</a>
</div>
<?php include('footer.php'); ?>
</body>
</html>


  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="../../js/pagination_scripts.js"></script>
</body>

</html>


<style> 
 #imagen {
     
      object-fit:cover;
      top: 0;
      left: 0;
      min-height: 300px;
      max-height:300px;
  }
</style>