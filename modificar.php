<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<?php
	$ci = $_GET['ci'];
	$sql = "select * from alumno where ci='".$ci."'";

	$con= @mysqli_connect('localhost','usuario','123456','ejemplobd324');
	
	$consulta = mysqli_query($con,$sql);

	$filas = mysqli_fetch_array($consulta);
	$nombre = $filas['nombre'];
	$apellido = $filas['apellido'];

?>
<div align="center">
<h1 class="borde">MODIFICAR DATOS</h1>
	<form action="guardar.php" method="GET">
	<input type="hidden" value="<?php echo $ci; ?>" name="ci">
	<label>NOMBRE: </label>
	<input type="text" value="<?php echo $nombre; ?>" name="nombre">
	<br>
	<label>APELLIDO: </label>
	<input type="text" value="<?php echo $apellido; ?>" name="apellido">
	<br>
	<button type="submit" name="Aceptar" class="btn btn-dark mb-2">GUARDAR</button> 
	<br>
	<a class="btn btn-dark" data-toggle="collapse"  role="button" aria-expanded="false" aria-controls="collapseExample" href="indexAdmin.php">VOLVER</a>
	</form>
</div>