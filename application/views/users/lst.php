
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Document</title>
<link rel="stylesheet" href="<?php echo base_url(); ?>public/css/bootstrap.min.css">
<style>
   body { margin: 10px; }
</style>
</head>
<body>
   <?php echo heading('Consultar Usuarios', 1); ?>

   <a href="<?php echo base_url(); ?>" class="btn btn-lg btn success">
      <span class="glyphicon glyphicon-arrow-left"></span>
      Regresar
     </a>

   <div class="table-responsive">
   <table class="table table-striped">
       <thead>
         <tr>
           <th colspan="2">Datos del Usuario</th>
         </tr>
       </thead>
<?php 

       foreach ($lu as $row) 
       {
       	echo "<tr>";
       	echo "<td>".$row->ide_usuario."</td>";
           echo "</tr>";

           echo "<tr>";
       	echo "<td>".$row->nom_usuario."</td>";
           echo "</tr>";

            echo "<tr>";
        echo "<td>".$row->ape_usuario."</td>";
           echo "</tr>";

            echo "<tr>";
        echo "<td>".$row->nick_usuario."</td>";
        echo "</tr>";

            echo "<tr>";
        echo "<td>".$row->eda_usuario."</td>";
        echo "</tr>";

           echo "<tr>";
       	echo "<td>".$row->cor_usuario."</td>";
           echo "</tr>";

       	  echo "<tr>";
       	echo "<td>".$row->cla_usuario."</td>";
       	echo "</tr>";

       	  echo "<tr>";
       	echo "<td>".$row->rol_usuario."</td>";
       	echo "</tr>";

       	  echo "<tr>";
       	echo "<td>".$row->est_usuario."</td>";
       	echo "</tr>";
        
       }

?>

<a href="<?php echo base_url(); ?>" class="btn btn-danger">ATRAS</a>
</table>
</div>
</body>
</html>