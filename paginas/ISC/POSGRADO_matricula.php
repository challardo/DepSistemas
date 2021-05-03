
<!DOCTYPE html>
<html>
<?php include('head.php') ?>
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

<a class="btn btn-outline-dark" href="CarreraISC.php">Regresar</a>
</div>
<?php include('footer.php'); ?>
</body>
</html>

<script>
$(document).ready(function(){
    $('#myTable2').dataTable();
});
 </script>