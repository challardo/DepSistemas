
<!DOCTYPE html>
<html>
<?php include('head.php'); ?>
<body>
    <?php include('header.php'); ?>

<!--Remaining section-->
<div class="container" style="margin-top: 100px; margin-bottom: 100px;"> 
<h1> Criterios de evaluación</h1>
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