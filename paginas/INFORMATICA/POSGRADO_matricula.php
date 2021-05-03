
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

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></style>
<script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>


    
  </head>
<body>
    <?php include('header.php'); ?>

<!--Remaining section-->
<div class="container" style="margin-top: 100px; margin-bottom: 100px;"> 
<h1> Matriculas de posgrado</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In cupiditate molestias iusto porro aut a atque reiciendis provident error, cum, sit qui ullam ea veniam minus molestiae numquam omnis quae? </p>

<div id="table-wrapper">

<table id="myTable2" class="table" >  
        <thead>  
          <tr>  
            <th>Nombre</th>  
            <th>Correo</th>  
           
          </tr>  
        </thead>  
        <tbody>  
          <tr>  
            <td>Ivan</td>  
            <td>Ivan@tectijuana.edu.mx</td>  
          
          </tr>  
          <tr>  
          <td>Carlos</td>  
            <td>carlos@tectijuana.edu.mx</td>    
           
          </tr>  
          <tr>  
          <td>Carlos</td>  
            <td>carlos@tectijuana.edu.mx</td>  
           
          </tr>  
		   <tr>  
       <td>Carlos</td>  
            <td>carlos@tectijuana.edu.mx</td>  
            
          </tr>  
          <tr>  
          <td>Carlos</td>  
            <td>carlos@tectijuana.edu.mx</td>  
           
          </tr>  
          <tr>  
          <td>Carlos</td>  
            <td>carlos@tectijuana.edu.mx</td>  
           
          </tr>  
		  
		   <tr>  
       <td>Carlos</td>  
            <td>carlos@tectijuana.edu.mx</td>  
            
          </tr>  
          <tr>  
          <td>Carlos</td>  
            <td>carlos@tectijuana.edu.mx</td>  
          
          </tr>  
          <tr>  
          <td>Carlos</td>  
            <td>carlos@tectijuana.edu.mx</td>  
          
          </tr>  
		  
		    <tr>  
        <td>Carlos</td>  
            <td>carlos@tectijuana.edu.mx</td>  
           
          </tr>  
          <tr>  
          <td>Carlos</td>  
            <td>carlos@tectijuana.edu.mx</td>   
           
          </tr>  
          <tr>  
          <td>Carlos</td>  
            <td>carlos@tectijuana.edu.mx</td>  
           
          </tr>  
        </tbody>  
      </table>  
</div>

<a class="btn btn-outline-dark" href="CarreraINFO.php">Regresar</a>
</div>
<?php include('footer.php'); ?>
</body>
</html>

<script>
$(document).ready(function(){
    $('#myTable2').dataTable();
});
 </script>