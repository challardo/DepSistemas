
<!DOCTYPE html>
<html>
<?php include('head.php'); ?>
<body>
    <?php include('header.php'); ?>

<!--Remaining section-->
<div class="container" style="margin-top: 100px; margin-bottom: 100px;"> 
<h1> Profesores</h1>
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
            <td>Ivan Gallardo</td>  
            <td>Ivan@tectijuana.edu.mx</td>  
          
          </tr>  
          <tr>  
          <td>Carlos Gallardo</td>  
            <td>carlos@tectijuana.edu.mx</td>    
           
          </tr>  
          <tr>  
          <td>Ana Sanchez</td>  
            <td>Ana@tectijuana.edu.mx</td>  
           
          </tr>  
		   <tr>  
       <td>Pedro Perez</td>  
            <td>Pedro@tectijuana.edu.mx</td>  
            
          </tr>  
          <tr>  
          <td>Carmen Perez</td>  
            <td>Carmen@tectijuana.edu.mx</td>  
           
          </tr>  
          <tr>  
          <td>Luisa Herrera</td>  
            <td>Luisa@tectijuana.edu.mx</td>  
           
          </tr>  
		  
		   <tr>  
       <td>Rodrigo Sanchez</td>  
            <td>Rodrigo@tectijuana.edu.mx</td>  
            
          </tr>  
          <tr>  
          <td>Fernando Garcia</td>  
            <td>Fernando@tectijuana.edu.mx</td>  
          
          </tr>  
          <tr>  
          <td>Genesis Herrera</td>  
            <td>Genesis@tectijuana.edu.mx</td>  
          
          </tr>  
		  
		    <tr>  
        <td>Omar Lopez</td>  
            <td>Omar@tectijuana.edu.mx</td>  
           
          </tr>  
          <tr>  
          <td>Miguel Martinez</td>  
            <td>Miguel@tectijuana.edu.mx</td>   
           
          </tr>  
          <tr>  
          <td>Angela Lopez</td>  
            <td>Angela@tectijuana.edu.mx</td>  
           
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

