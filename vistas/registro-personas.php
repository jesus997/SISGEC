<?php
/**
 * Archivo
 **/
?>
<!doctype html>
<html lang="es">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="text/js" href="../assets/js/bootstrap.min.js">
  <link rel="shortcut icon" href="../assets/imagenes/Crystal.ico">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.6/js/gijgo.min.js" type="text/javascript"></script>
  <link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.6/css/gijgo.min.css" rel="stylesheet" type="text/css" />
  <title>Registro de Cuentas</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="../index.php"><img src="../assets/imagenes/Crystal.png" width="40" height="40" alt="Logo"><span class="px-2 lead"><b>Crystal</b></span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link lead" href="../index.php">Inicio<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link lead" href="mis-eventos.php">Mis Eventos</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link lead" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link lead" href="#">LogOut</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container-fluid align-self-center bg-primary">
    <div class="container-fluid text-white">
      <h1 class="display-1"><b>Crystal</b></h1>
      <h2 class="display-5">Salones para eventos</h2>
    </div>
  </div>

  <h2 class="display-4 text-center text-muted py-3">Registro de Cuentas</h2>
    <!-- Formulario de Registro -->
  <div class="container align-self-center">  
    <form>
      <div class="form-row">
        <div class="col">
          <input type="text" class="form-control" placeholder="Nombre(s)">
        </div>
        <div class="col">
          <input type="text" class="form-control" placeholder="Apellido(s)">
        </div>
        <div class="col">
          <input id="datepicker" width="276" placeholder="Fecha de Nacimiento" />
          <script>$('#datepicker').datepicker({uiLibrary: 'bootstrap4'});</script>
        </div>
        <div class="col-2">
          <input type="tel" class="form-control" maxlength="10" pattern="[0-9]+" placeholder="Telefono">
        </div>
      </div>

      <div class="form-row">
        <div class="col">
          <input type="text" class="form-control" placeholder="Empresa">
        </div>
        <div class="col">
          <input type="email" class="form-control" id="inputEmail4" placeholder="Correo">
        </div>
        <div class="col">
          <input type="password" class="form-control" id="inputPassword4" placeholder="Contraseña">
        </div>
      </div>

      <div class="form-row">
        <div class="col-4">
          <input type="text" class="form-control" placeholder="calle">
        </div>
        <div class="col">
          <input type="text" class="form-control" placeholder="Numero interior">
        </div>
        <div class="col">
          <input type="text" class="form-control" placeholder="Numero exterior">
        </div>
        <div class="col-4">
          <input type="text" class="form-control" placeholder="Colonia">
        </div>
      </div>

      <div class="form-row">
        <div class="col">
          <input type="text" class="form-control" placeholder="Ciudad">
        </div>
        <div class="col">
          <input type="text" class="form-control" placeholder="Municipio">
        </div>
        <div class="col">
          <input type="text" class="form-control" placeholder="Estado">
        </div>
        <div class="col">
          <input type="text" class="form-control" placeholder="País">
        </div>
        <div class="col">
          <input type="text" class="form-control" placeholder="Código Postal">
        </div>
      </div>
      <div class="row py-3 px-3">
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>  
      
    </form>
  </div>

    <!-- jQuery first, then Popper.js -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
  </html>