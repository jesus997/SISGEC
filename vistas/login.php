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
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="text/js" href="../assets/js/bootstrap.min.js">
  <link rel="shortcut icon" href="../assets/imagenes/Crystal.ico">
  <link href="../css/fontawesome-all.css" rel="stylesheet">
  <title>LogIn</title>
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

  <div class="container-fluid py-5">  
    <div class="row align-self-center">
      <div class="col-sm-4 text-center align-self-center">
        <img class="img-fluid" src="../assets/imagenes/logo-Crystal.png">
      </div>
      <aside class="col-sm-4">
        <h3 class="text-center">Eres Organizador?</h3>
        <p class="display-5 text-center">Si no tienes cuenta comunicate con nosotros</p>
        <p class="text-center"><a class="display-5" href="#">322 199 65 88</a></p>
        <div class="card">
          <article class="card-body">
          <h4 class="card-title mb-4 mt-1">Sign in</h4>
            <form>
              <div class="form-group">
                <label>Your email</label>
                <input name="" class="form-control" placeholder="Email" type="email">
              </div> <!-- form-group// -->
              <div class="form-group">
                <a class="float-right" href="#">Forgot?</a>
                <label>Your password</label>
                <input class="form-control" placeholder="******" type="password">
              </div> <!-- form-group// --> 
              <div class="form-group"> 
                <div class="checkbox">
                  <label> <input type="checkbox"> Save password </label>
                </div> <!-- checkbox .// -->
              </div> <!-- form-group// -->  
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block"> Login  </button>
              </div> <!-- form-group// -->
            </form>
          </article>
        </div> <!-- card.// -->
      </aside> <!-- col.// -->
    </div>
  </div>


  <!-- jQuery first, then Popper.js -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>