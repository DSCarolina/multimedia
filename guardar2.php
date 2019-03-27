<?php
   $ci = $_GET['ci'];
  $nombre = $_GET["nombre"];
  $apellido = $_GET["apellido"];
  $departamento = $_GET["departamento"];

  // $sql = "insert into alumno values('213','m6','s7','09')";
  $sql = "insert into alumno values ('".$ci."','".$nombre."','".$apellido."','".$departamento."')";
  
  if (isset($_GET['Aceptar'])) {
    $con = @mysqli_connect('localhost','usuario','123456','ejemplobd324');
    $consulta = mysqli_query($con,$sql);
  }
?>
<h1><p>!Registro exitoso!</p></h1>
<br>
<a class="btn btn-dark" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample" href="indexAdmin.php">VOLVER</a>
