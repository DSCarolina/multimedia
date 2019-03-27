<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="./css/style.css">
<div align="center">
  <table border="1">
<h1 class="borde">REGISTRAR</h1>

<form action="guardar2.php" method="GET">

  <label class="col-sm-1 col-form-label">CI: </label> 
  <input type="text"  name="ci"> <br>
  <label class="col-sm-1 col-form-label">NOMBRE: </label>
  <input type="text"  name="nombre">  <br>
  <label class="col-sm-1 col-form-label">APELLIDO: </label>
  <input type="text"  name="apellido">  <br>
  <label class="col-sm-1 col-form-label">DEPARTAMENTO: </label>
  <input type="text"  name="departamento">  <br><br>

  <button type="submit" class="btn btn-dark mb-2" name="Aceptar">GUARDAR</button>
</form>
<br>
<a class="btn btn-dark" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample" href="indexAdmin.php">VOLVER</a>
</div>