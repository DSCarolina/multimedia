<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="./css/style.css">
<?php
  $usuario = $_GET['usuario'];
  $contraseña = $_GET['contraseña'];
  $sql = "select * from alumno where ci='".$contraseña."' && nombre='".$usuario."'";
  $con= @mysqli_connect('localhost','usuario','123456','ejemplobd324');
  $consulta = mysqli_query($con,$sql);
  $filas = mysqli_fetch_array($consulta);
  $nombre = $filas['nombre'];
  $ci= $filas['ci'];

  if ($usuario=="admin" && $contraseña==123456) {
   echo "<script language='javascript'>"; 
  echo "location.href='indexAdmin.php'"; 
  echo "</script>";  
  }
  else if ($usuario==$nombre && $contraseña==$ci) {


      echo "<div align='center'>";
      echo "<h1>Bienvenido</h1>"; 
      echo "<table border='1'>";
      echo "<tr>";
      echo "<td class='color'>Carnet de identidad</td>";
      echo "<td class='color'>Nombre</td>";
      echo "<td class='color'>Apellido</td>";
      echo "<td class='color'>Cod departamental</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td class='para'>".$filas['ci']."</td>";
      echo "<td class='para'>".$filas['nombre']."</td>";
      echo "<td class='para'>".$filas['apellido']."</td>";
      echo "<td class='para'>".$filas['depto']."</td>";
      echo "</tr>";
      echo "</table>";
      echo "<br>";
      echo "<a class='btn btn-dark' data-toggle='collapse' role='button' aria-expanded='false' aria-controls='collapseExample' href='login.php'>Volver</a>";
      echo "</div>";
  }else{
   echo "Usuario no válido";
  }
?>



