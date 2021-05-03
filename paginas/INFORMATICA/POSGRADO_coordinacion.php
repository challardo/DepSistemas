
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
<h1> Coordinación de posgrado</h1>
<li>
    <p><strong> Jefa de vinculacion:</strong> Dra. Yazmin Maldonado Robles</P>
  </li>
  <li>
    <p><strong>Jefa de la División de Estudios de Posgrado e Investigación</strong></P>
  </li>
  <li>
    <p><strong>Correo:</strong> depi_tijuana@tecnm.mx</P>
  </li>
 
<div class="container" id="formulario">

 <h1 class="display-1" style="text-align: center; "> Mandanos un mensaje!</h1>
 <h5 style="text-align: center; margin-bottom: 50px;"> Si tienes alguna duda o comentario:</h5>

<form class="row g-3">
  <div class="col-md-6">
    <label for="name" class="">Tu nombre</label>
    <input type="text" id="name" name="name" class="form-control">
   
  </div>
  <div class="col-md-6">
    <label for="email" class="">Correo electronico</label>
    <input type="text" id="email" name="email" class="form-control">
   
  </div>
  <div class="col-md-12">
    <div class="md-form mb-0">
      <label for="subject" class="">Asunto</label>
        <input type="text" id="subject" name="subject" class="form-control">
       
    </div>
</div>
<div class="col-md-12">

  <div class="md-form">
    <label for="message">Tu mensaje</label>
      <textarea type="text" id="message" name="message" rows="4" class="form-control md-textarea"></textarea>
      
  </div>

</div>

  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Estoy de acuerdo con los terminos y condiciones
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-outline-primary btn-lg" >Enviar</button>
  </div>
</form>
       
</div>

<a class="btn btn-outline-dark" href="CarreraINFO.php">Regresar</a>
</div>
<?php include('footer.php'); ?>
</body>
</html>