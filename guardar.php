<?php
	$ci = $_GET["ci"];
	$nombre = $_GET['nombre'];
	$apellido = $_GET['apellido'];

	$sql = "update alumno set nombre='".$nombre."', apellido='".$apellido."' where ci='".$ci."'";

	if (isset($_GET['Aceptar'])) {
		$con = @mysqli_connect('localhost','usuario','123456','ejemplobd324');
		$consulta = mysqli_query($con,$sql);
	}
?>
<a class="btn btn-dark" data-toggle="collapse"  role="button" aria-expanded="false" aria-controls="collapseExample" href="indexAdmin.php">VOLVER</a>