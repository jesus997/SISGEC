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
  <title>Salón Rubí</title>
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

  <h2 class="display-4 text-center text-muted">Salón Rubí</h2>


  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Inicio</th>
        <th scope="col">Fin</th>
        <th scope="col">Duración</th>
        <th scope="col">Nombre</th>
        <th scope="col">Tipo</th>
        <th scope="col">Invitados</th>
        <th scope="col">Cronograma</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>20/05/2018 - 20:00</td>
        <td>20/05/2018 - 23:59</td>
        <td>5 hrs</td>
        <td>Boda de Juan y Susy</td>
        <td>Social</td>
        <td><a href="#">lista invitados</a></td>
        <td><a href="#">programa Boda</a></td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>21/05/2018 - 19:00</td>
        <td>21/05/2018 - 23:00</td>
        <td>4 hrs</td>
        <td>XV años de Alejandra</td>
        <td>Social</td>
        <td><a href="#">invitados</a></td>
        <td><a href="#">programa XV años</a></td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>22/05/2018 - 18:00</td>
        <td>22/05/2018 - 23:00</td>
        <td>5 hrs</td>
        <td>Aniversario de Boda</td>
        <td>Social</td>
        <td><a href="#">invitados</a></td>
        <td><a href="#">programa Aniversario</a></td>
      </tr>
    </tbody>
  </table>


  <!-- jQuery first, then Popper.js -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>