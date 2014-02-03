-<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>modificar  Usuario</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/bootstrap.min.css">
    <style>

    body{margin:10px;}

     button.btn {margin-right: 2px; }
    </style>
</head>
<body>
   
    <?php echo heading('Modificar Usuario', 1); ?> <!-- este codigo es para gnerara un h1 en codeogniter -->

    <a href="<?php echo base_url(); ?>" class="btn btn-lg btn success">
      <span class="glyphicon glyphicon-arrow-left"></span>
      Regresar
     </a>

            <?php 
            foreach ($lu as $row){ ?>

              
              <form class="form-horizontal" role="form" method="post" id="btfrm_register">
            <div class="form-group">
              <div class="col-lg-10">
                <input type="text" class="form-control" name="ide_usuario" placeholder="Documento de Identidad" 
                validate="required" value="<?php echo $row->ide_usuario; ?>">
              </div>
            </div>

            <div class="form-group">
              <div class="col-lg-10">
                <input type="text" class="form-control" name="nom_usuario" placeholder="Nombres" 
                validate="required" value="<?php echo $row->nom_usuario; ?>">
              </div>
            </div>

            <div class="form-group">
              <div class="col-lg-10">
                <input type="text" class="form-control" name="ape_usuario" placeholder="Apellidos" 
                validate="required" value="<?php echo $row->ape_usuario; ?>">
              </div>
            </div>

            <div class="form-group">
              <div class="col-lg-10">
                <input type="text" class="form-control" name="nick_usuario" placeholder="Nickname" 
                validate="required" value="<?php echo $row->nick_usuario; ?>">
              </div>
            </div>

             <div class="form-group">
              <div class="col-lg-10">
                <input type="text" class="form-control" name="eda_usuario" placeholder="Edad" 
                validate="required" value="<?php echo $row->eda_usuario; ?>">
              </div>
            </div>
      
             <div class="form-group">
              <div class="col-lg-10">
                <input type="text" class="form-control" name="cor_usuario" placeholder="Correo Electronico" 
                validate="required|email" value="<?php echo $row->cor_usuario; ?>" >
              </div>
            </div>

            <div class="form-group">
              <div class="col-lg-10">
                <input type="password" class="form-control" name="cla_usuario" placeholder="Clave" 
                validate="required" value="<?php echo $row->cla_usuario; ?>" >
              </div>
            </div>
            
            <div class="form-group">
              <div class="col-lg-10">
              <select name="rol_usuario" class="form-control">
                  <option value="">Seleccione rol</option>
                  <option value="Aprendiz">Aprendiz</option>
                  <option value="Instructor">Instructor</option>
              </select>
              <input type="hidden" name="id" value="<?php echo $row->rol_usuario; ?>" >
              </div>
            </div>
             <div class="form-group">
              <div class="col-lg-10">
              <select name="est_usuario" class="form-control">
                  <option value="">Seleccione estado</option>
                  <option value="Activo">Activo</option>
                  <option value="Inactivo">Inactivo</option>
              </select>
              <input type="hidden" name="id" value="<?php echo $row->est_usuario; ?>">
              </div>
            </div>

            <div class="form-group">
              <div class="col-lg-10">
                <button type="submit" class="btn btn-success">modificar &rarr;</button>
                <button type="reset"  class="btn btn-default">Limpiar Formulario&rarr;</button>
              </div>
            </div>
        </form>
       <?php } ?>

</body>
</html>