
<!DOCTYPE html>
<html>
<?php include('head.php'); ?>
<body>
    <?php include('header.php'); ?>

<!--Remaining section-->
<div class="container" style="margin-top: 100px; margin-bottom: 100px;"> 
<h1> Instrumentos de evaluación</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In cupiditate molestias iusto porro aut a atque reiciendis provident error, cum, sit qui ullam ea veniam minus molestiae numquam omnis quae? </p>

<h1> Rubricas </h1>
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
      <td>Rubrica Residencia</td>
      <td> 
      <a href="../../pdf/Rubrica_residencia.xlsx" download="RubricaResidencia">
        <button type="button" class="btn btn-outline-dark">Descargar</button>
      </a> 
      </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Rubrica Practicas</td>
      <td> 
      <a href="../../pdf/Rubrica_practicas.xlsx" download="RubricaPracticas">
        <button type="button" class="btn btn-outline-dark">Descargar</button>
      </a>
      </td>
    
    </tr>
    <tr>
      <th scope="row">3</th>
      <td >Rubrica Tareas</td>
     <td>
     <a href="../../pdf/Rubrica_tareas.xlsx" download="RubricaTareas">
        <button type="button" class="btn btn-outline-dark">Descargar</button>
    </a>   
    </td>
    </tr>

    <tr>
      <th scope="row">4</th>
      <td >Rubrica Proyectos</td>
     <td>
     <a href="../../pdf/Rubrica_proyectos.xlsx" download="RubricaProyectos">
        <button type="button" class="btn btn-outline-dark">Descargar</button>
    </a>   
    </td>
    </tr>

    <tr>
      <th scope="row">5</th>
      <td >Rubrica Presentacion oral</td>
     <td>
     <a href="../../pdf/Rubrica_presentacion_oral.xlsx" download="RubricaPresencialOral">
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