<?php
	$errorClass = isset($error) && !empty($error) ? ' is-invalid' : '';
	$errorsList = ["invalid-email", "invalid-password"];
?>

<div id="login">
  <div class="container">
    <h1 class="text-center">Iniciar sesión</h1>
    <div class="login-form-container">
      <hr/>
      <form action="<?= $helper->url("/login") ?>" method="POST">
        <div class="form-group">
          <input type="email" name="email" class="form-control<?= isset($error) && $error === $errorsList[0] ? $errorClass : "" ?>" placeholder="Email" focus-first> <?php
		  if(isset($error) && $error === "invalid-email") { ?>
          	<div class="invalid-feedback">No existe un usuario con este correo o no es un correo electronico valido.</div> <?php
		  } ?>
        </div>
        <div class="form-group">
          <input type="password" name="password" class="form-control<?= isset($error) && $error === $errorsList[1] ? $errorClass : "" ?>" placeholder="Contraseña"> <?php
		  if(isset($error) && $error === "invalid-password") { ?>
          	<div class="invalid-feedback">La contraseña es incorrecta.</div> <?php
		  } ?>
        </div> <?php
		if(isset($error) && !in_array($error, $errorsList)) { ?>
        	<p class="text-danger"><small><?= $error ?></small></p> <?php
		} ?>
        <div class="form-group">
          <button class="btn-dark btn-lg btn-block">Ingresar</button>
        </div>
      </form>
      <p class="text-center"><a href="<?= $helper->url("/password/forgot") ?>">¿Perdiste tu contraseña?</a></p>
    </div>
  </div>
</div>