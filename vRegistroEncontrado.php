<!DOCTYPE html>
<html>
<head>
	<?php echo view ('venlaces'); ?>
	<title> Buscar Registros </title>
</head>
<body>
	 <div class="text-center text-dark p-3" style="background-color: rgb( 218, 247, 166);">
    <div class="row">
    <div class="col-lg-2 col-md-6 col-sm-12">
      <center><img src="http://sntsedesolmx.com/img/LOGOINDEX.png">
        </center>
      </div>
    <div class="col-lg-6 col-md-6 col-sm-12 ">
      <center><img class="modalorg" src="http://sntsedesolmx.com/img/BIENESTAR1.png" <="" center="">
        </center>
      </div>
    </div>
    </div>
  </div>
    <center>
    <div>
    	<h1 style="color:#6C1635">SISTEMA DE ESTÍMULO ECONÓMICO PARA EMPLEADOS DE BIENESTAR</h1>
<?php echo view ('vNavBar'); ?>
  <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16"style="color: #6C1635">
<div class="container">
	<div class="row">
		<h1> Registro encontrado </h1>

	<form method="POST" action="../Home/actualizarRegistros">
		<input type="hidden" class="form-control" id= "Id_usuario" name= "Id_usuario" value= " <?php echo $Id_usuario; ?>">
		<div class ="mb-3 row">
			<label for="Nombre" class="col-sm-2 col-form-label"> Nombre </label>
			<div class="col-sm-10">
				<input type="Nombre" class="form-control" id="Nombre" name="Nombre" value= " <?php echo $Nombre; ?>"></input>
			</div>
			
		</div>
		<div class ="mb-3 row">
			<label for="Usuario" class="col-sm-2 col-form-label"> Usuario </label>
			<div class="col-sm-10">
				<input type="Usuario" class="form-control" id= "Usuario" name= "Usuario" value = " <?php echo $Usuario; ?>"></input>
					
			</div>
		</div>
		<div class ="mb-3 row">
			<label for="Email" class="col-sm-2 col-form-label"> Email </label>
			<div class="col-sm-10">
				<input type= "Email" class="form-control" id= "Email" name= "Email" value= " <?php echo $Email; ?>"></input>
		</div>
	</div>
	<div class ="mb-3 row">
			<label for="Password" class="col-sm-2 col-form-label"> Password </label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id= "Password" name= "Password" value= " <?php echo $Password; ?>"></input>
		</div>
	</div>
	<div class="mb-3 row">
	<button type="submit" style="color: #F8F9F9 ; background-color: #6C1635;border: #6C1635"  class="btn btn-primary mb-3">Actualizar</button>

	<a type="button" class="btn btn-danger mb-3" href="<?php echo base_url(); ?>/Home/eliminarRegistro/<?php echo $Id_usuario; ?>">Eliminar</a>
 </form>
  </div> 
	</div>
	
</div>



</body>
<?php echo view('vfooter'); ?>
</html>
<?php echo view('vfooters'); ?>  
