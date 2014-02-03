<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/bootstrap.min.css">
    <style>

    body{margin:10px;}

     a.btn {margin-right: 2px; }
    </style>
</head>
<body>
   
    <?php echo heading('Lista de Usuarios', 1); ?> <!-- este codigo es para gnerara un h1 en codeogniter -->

    <a href="<?php echo base_url(); ?>index.php/users/add" class="btn btn-lg btn success">
      <span class="glyphicon glyphicon-plus"></span>
      Adicionar Usuario
    </a>
    
    <div class="table-responsive">
    <table class="table table-striped table-hover">
    <thead> 
    <tr>    
    <th>Nombres</th>
    <th>Ide</th>
    <th>Edad</th>
    <th>Correo Electronico</th>
    <th>Acciones</th>
    </tr>
    </thead>
  
    
    <?php   

        foreach ($lu as $row) 
        {
            echo "<tr>";
            echo "<td>".$row->nom_usuario."</td>";
            echo "<td>".$row->ide_usuario."</td>";
            echo "<td>".$row->eda_usuario."</td>";
            echo "<td>".$row->cor_usuario."</td>";
            $actions = "<td>";
            $actions .= "<a href='".base_url()."index.php/users/lst/".$row->ide_usuario."'class='btn-sm btn-default'><span class='glyphicon glyphicon-search'></span></a>";
            $actions .= "<a href='".base_url()."index.php/users/upd/".$row->ide_usuario."'class='btn-sm btn-default'>M</a>";
            $actions .= "<button type='button' class='btn btn-danger btn-delete' data-id='".$row->ide_usuario."'><span class='glyphicon glyphicon-thumbs-down'></span></button> ";
            $actions .= "</td>";
            echo $actions;
            echo "</tr>";
        }

     ?>
     </table>
     </div>

     <script  src="<?php echo base_url(); ?>public/js/jquery-1.10.2.min.js"></script>
     <script>   
     $(document).ready(function(){
      $('table.table').on('click', '.btn-delete', function(event) {
          event.preventDefault();
          $cnf = confirm("realmente desea eliminar este Usuario");

          if($cnf == true)
          {
            $uid = $(this).attr("data-id");
            window.location.replace('<?php echo base_url(); ?>index.php/users/dlt/'+$uid);
          }
      });

     });
     </script>
</body>
</html>