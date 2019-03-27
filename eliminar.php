<?php
    $ci = $_GET['ci'];
	$sql = "delete from alumno where ci='".$ci."'";
	$con = @mysqli_connect('localhost','usuario','123456','ejemplobd324');
	mysqli_query($con,$sql);
	 echo "<script language='javascript'>"; 
  echo "location.href='indexAdmin.php'"; 
  echo "</script>"; 
?>
