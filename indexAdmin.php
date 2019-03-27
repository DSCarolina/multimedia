<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="./css/style.css">
<?php
	
	$sql = "select * from alumno";
	$con = @mysqli_connect('localhost','usuario','123456','ejemplobd324');
	$consulta = mysqli_query($con,$sql);
?>
<div align="center">
<h1 class="borde">LISTA DE ALUMNOS</h1>
<table border="1" >

	<tr>
		<td class="color">Carnet de identidad</td>
		<td class="color">Nombre</td>
		<td class="color">Apellido</td>
		<td class="color">Departamento</td>
	</tr>
	<?php
		while ($filas = mysqli_fetch_array($consulta)) {

			echo "<tr>";
			echo "<td class='para'>".$filas['ci']."</td>";
			echo "<td class='para'>".$filas['nombre']."</td>";
			echo "<td class='para'>".$filas['apellido']."</td>";
			echo "<td class='para'>".$filas['depto']."</td>";
			echo "<td class='para'>";
			echo "<a class='btn btn-dark' href='modificar.php?ci=".$filas['ci']."'>Modificar</a>";
			echo " ";
			echo "<a class='btn btn-dark' href='eliminar.php?ci=".$filas['ci']."'>Eliminar</a>";
			echo "</td>";
			echo "</tr>";
		}
	?>
</table>
<br>
<a class="btn btn-dark" data-toggle="collapse"  role="button" aria-expanded="false" aria-controls="collapseExample" href="nuevo.php">REGISTRAR NUEVO ALUMNO</a>
</div>