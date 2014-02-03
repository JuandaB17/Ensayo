<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/bootstrap.min.css">
    <style>

    body{margin:10px;}

     button.btn {margin-right: 2px; }
    </style>
</head>
<body>
   
    <?php echo heading('Adicionar Usuario', 1); ?> <!-- este codigo es para gnerara un h1 en codeogniter -->

    <a href="<?php echo base_url(); ?>" class="btn btn-lg btn success">
      <span class="glyphicon glyphicon-arrow-left"></span>
      Regresar
     </a>

              <form class="form-horizontal" role="form" method="post" id="btfrm_register">
            <div class="form-group">
              <div class="col-lg-10">
                <input type="text" class="form-control" name="ide_usuario" placeholder="Documento de Identidad" validate="required">
              </div>
            </div>
            <div class="form-group">
              <div class="col-lg-10">
                <input type="text" class="form-control" name="nom_usuario" placeholder="Nombres" validate="required">
              </div>
            </div>


            <div class="form-group">
              <div class="col-lg-10">
                <input type="text" class="form-control" name="ape_usuario" placeholder="Apellidos" validate="required" >
              </div>
            </div>

            <div class="form-group">
              <div class="col-lg-10">
                <input type="text" class="form-control" name="nick_usuario" placeholder="Nickname" validate="required" >
              </div>
            </div>

             <div class="form-group">
              <div class="col-lg-10">
                <input type="text" class="form-control" name="eda_usuario" placeholder="Edad" validate="required">
              </div>
            </div>
      
             <div class="form-group">
              <div class="col-lg-10">
                <input type="text" class="form-control" name="cor_usuario" placeholder="Correo Electronico" validate="required|email" >
              </div>
            </div>

            <div class="form-group">
              <div class="col-lg-10">
                <input type="password" class="form-control" name="cla_usuario" placeholder="Clave" validate="required" >
              </div>
            </div>
            
            <div class="form-group">
              <div class="col-lg-10">
              <select name="rol_usuario" class="form-control">
                  <option value="">Seleccione rol</option>
                  <option value="Aprendiz">Aprendiz</option>
                  <option value="Instructor">Instructor</option>
              </select>
              <input type="hidden" name="id">
              </div>
            </div>
             <div class="form-group">
              <div class="col-lg-10">
              <select name="est_usuario" class="form-control">
                  <option value="">Seleccione estado</option>
                  <option value="Activo">Activo</option>
                  <option value="Inactivo">Inactivo</option>
              </select>
              <input type="hidden" name="id">
              </div>
            </div>

            <div class="form-group">
              <div class="col-lg-10">
                <button type="submit" class="btn btn-success">Adicionar &rarr;</button>
                <button type="reset"  class="btn btn-default">Limpiar Formulario&rarr;</button>
              </div>
            </div>
        </form>

</body>
</html>