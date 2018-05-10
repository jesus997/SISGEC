<?php
/**
 * Archivo
 **/
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="text/js" href="assets/js/bootstrap.min.js">
  <link rel="shortcut icon" href="assets/imagenes/Crystal.ico">
  <title>Salones Crystal</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php"><img src="assets/imagenes/Crystal.png" width="40" height="40" alt="Logo"><span class="px-2 lead"><b>Crystal</b></span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link lead" href="index.php">Inicio<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link lead" href="vistas/mis-eventos.php">Mis Eventos</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link lead" href="vistas/login.php">Login</a>
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

  <h2 class="display-4 text-center text-muted py-3">¡Seleccione un salón para ver sus Eventos!</h2>

  <div class="card-deck">
    <div class="card">
      <img class="card-img-top" src="assets/imagenes/rubi.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Salón Rubí</h5>
        <p class="card-text">Salón para eventos recreativos y sociales: aniversarios, bodas, cumpleaños, XV años, bautismos, comuniones, conmemoraciones, graduaciones, reuniones empresariales y universitarias, shows y animaciones.</p>
        <p class="card-text">Capacidad: </p>
        <p class="card-text">Costo de alquiler por hora: </p>
      </div>
      <div class="card-footer">
        <a href="vistas/rubi.php" class="btn btn-dark">Eventos</a>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="assets/imagenes/esmeralda2.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Salón Esmeralda</h5>
        <p class="card-text">Salón para debates, paneles, mesas redondas, talleres y seminarios entre otros.</p>
        <p class="card-text">Capacidad: </p>
        <p class="card-text">Costo de alquiler por hora: </p>
      </div>
      <div class="card-footer">
        <a href="vistas/esmeralda.php" class="btn btn-dark">Eventos</a>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="assets/imagenes/aguamarina4.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Salón Aguamarina</h5>
        <p class="card-text">Salón audiovisual para conferencias, simposios, congresos, convenciones, foros y cursos entre otros.</p>
        <p class="card-text">Capacidad: </p>
        <p class="card-text">Costo de alquiler por hora: </p>
      </div>
      <div class="card-footer">
        <a href="vistas/aguamarina.php" class="btn btn-dark">Eventos</a>
      </div>
    </div>
  </div>

  <!-- jQuery first, then Popper.js -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>