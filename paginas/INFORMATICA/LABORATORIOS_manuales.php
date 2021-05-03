
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <title>Dept. Sistemas Computacionales</title>
    <link rel="shortcut icon" href="../../img/InformaticaLogo.png" />
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style6.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@700&display=swap" rel="stylesheet">
    <script src="../../js/jquery-3.4.1.min.js"></script>
    <script src="../../js/popper.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    
  </head>
<body>
    <?php include('header.php'); ?>

<!--Remaining section-->
<div class="container" style="margin-top: 100px; margin-bottom: 100px;"> 
<h1> Manuales de los laboratorios</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In cupiditate molestias iusto porro aut a atque reiciendis provident error, cum, sit qui ullam ea veniam minus molestiae numquam omnis quae? </p>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titulo</th>
      <th scope="col">Descargar</th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Archivo 1</td>
      <td> 
      <a href="../../pdf/plan-de-Estudios.pdf" download="PlanEstudios">
        <button type="button" class="btn btn-outline-dark">Descargar</button>
      </a> 
      </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Archivo 2</td>
      <td> 
      <a href="../../pdf/plan-de-Estudios.pdf" download="PlanEstudios">
        <button type="button" class="btn btn-outline-dark">Descargar</button>
      </a>
      </td>
    
    </tr>
    <tr>
      <th scope="row">3</th>
      <td >Archivo 3</td>
     <td>
     <a href="../../pdf/plan-de-Estudios.pdf" download="PlanEstudios">
        <button type="button" class="btn btn-outline-dark">Descargar</button>
    </a>   
    </td>
    </tr>

    <tr>
      <th scope="row">4</th>
      <td >Archivo 4</td>
     <td>
     <a href="../../pdf/plan-de-Estudios.pdf" download="PlanEstudios">
        <button type="button" class="btn btn-outline-dark">Descargar</button>
    </a>   
    </td>
    </tr>

  </tbody>
</table>

<a class="btn btn-outline-dark" href="CarreraINFO.php">Regresar</a>
</div>
<?php include('footer.php'); ?>
</body>
</html>