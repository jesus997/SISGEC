<?php
/**
 * Archivo base del proyecto
 **/
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?= $helper->url("/assets/css/bootstrap.min.css") ?>">
  <link rel="text/javascript" href="<?= $helper->url("/assets/js/bootstrap.min.js") ?>">
  <link rel="shortcut icon" href="<?= $helper->url("/assets/imagenes/Crystal.ico") ?>">
  <title><?= $config->get("site.name") ?></title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
		<a class="navbar-brand" href="<?= $helper->url("/") ?>"><img src="<?= $helper->url("/assets/imagenes/Crystal.png") ?>" width="40" height="40" alt="Logo"><span class="px-2 lead"><b>Crystal</b></span></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
		<ul class="navbar-nav">
			<li class="nav-item active">
			<a class="nav-link lead" href="<?= $helper->url("/") ?>">Inicio<span class="sr-only">(current)</span></a>
			</li><?php
			if($auth->check()) { ?>
				<li class="nav-item">
					<a class="nav-link lead" href="<?= $helper->url("/mis-eventos") ?>">Mis Eventos</a>
				</li> <?php
			}
			if($auth->isAdmin()) { ?>
				<li class="nav-item">
					<a class="nav-link lead" href="<?= $helper->url("/salones") ?>">Salones</a>
				</li>
				<li class="nav-item">
					<a class="nav-link lead" href="<?= $helper->url("/organizadores") ?>">Organizadores</a>
				</li> <?php
			} ?>
		</ul>
		<ul class="navbar-nav ml-auto"><?php
			if(!$auth->check()) { ?>
				<li class="nav-item">
					<a class="nav-link lead" href="<?= $helper->url("/login") ?>">Login</a>
				</li> <?php
			} else { ?>
				<li class="nav-item dropdown">
					<button class="btn btn-secondary dropdown-toggle" type="button" id="logoutmenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<?= $auth->get("Nombres")." ".$auth->get("Apellidos") ?>
					</button>
					<div class="dropdown-menu" aria-labelledby="logoutmenu"><?php
						$tipo = "Organizador";
						if($auth->isAdmin()) $tipo = "Administrador"; ?>
						<span class="dropdown-item-text"><?= $tipo ?></span>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="<?= $helper->url("/logout") ?>">LogOut</a>
					</div>
				</li> <?php
			} ?>
		</ul>
		</div>
	</nav>
	
	<div class="container-fluid align-self-center bg-primary">
		<div class="container-fluid text-white">
		<h1 class="display-1"><b>Crystal</b></h1>
		<h2 class="display-5">Salones para eventos</h2>
		</div>
	</div><?php
	if( file_exists(__DIR__."/".$file_name.".php") ) {
		include_once(__DIR__."/".$file_name.".php");
	} else {
		echo "$file_name no existe.";
	}

	?>
		<!-- jQuery first, then Popper.js -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.6/js/gijgo.min.js" type="text/javascript"></script>
  		<link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.6/css/gijgo.min.css" rel="stylesheet" type="text/css" />
		<script src="<?= $helper->url("/assets/js/tinymce.min.js") ?>"></script>
		<script src="<?= $helper->url("/assets/js/jquery.tinymce.min.js") ?>"></script>
		<script type="text/javascript">
			(function($) {
				$('document').ready(function() {
					if($('textarea.tinymce').length > 0) {
						$('textarea.tinymce').tinymce({
							plugins: [
								'advlist autolink lists link charmap print preview anchor',
								'searchreplace visualblocks fullscreen',
								'insertdatetime table contextmenu paste'
							],
							branding: false,
							height : 400,
							toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link'
						});
					}

					if($('.datepicker1').length > 0) {
						$('.datepicker1').datetimepicker({
							uiLibrary: 'bootstrap4',
							format: 'yyyy-mm-dd HH:MM:00'
						});
					}

					if($('.datepicker2').length > 0) {
						$('.datepicker2').datetimepicker({
							uiLibrary: 'bootstrap4',
							format: 'yyyy-mm-dd HH:MM:00'
						});
					}
				});
			})(jQuery);
		</script>
	</body>
</html>