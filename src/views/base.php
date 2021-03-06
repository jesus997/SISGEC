<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
  	<title><?= $config->get("site.name") ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Font Awesome -->
    <script src="https://use.fontawesome.com/96cbd61ead.js"></script>
    <script>
      var SITE_URL = "<?= $helper->url("/") ?>";
    </script>
    <script src="<?= $helper->url("/dist/importer.min.js") ?>"></script>
  </head>

  <body>
    <div id="page-wrap">
      <header id="page-header" class="navbar navbar-expand-sm navbar-dark bg-dark flex-column flex-md-row justify-content-between sticky-top">
        <a class="navbar-brand mr-0" href="<?= $helper->url("/") ?>">SISGEC <small>v1.0</small></a>
        <div class="navbar-nav flex-row">
          <!-- LOGGED-IN NAVIGATION -->
          <?php if( $auth->check() ) { ?>
            <!-- Only in desktop nav -->
            <div class="nav-item dropdown d-none d-sm-block">
              <a class="nav-link dropdown-toggle" id="header-account-menu-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= $auth->fullname ?></a>
              <div class="dropdown-menu account-menu" aria-labelledby="header-account-menu-link">
                <span class="dropdown-item-text"><?= $auth->job ?></span>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?= $helper->url("/account") ?>">Settings</a>
                <a class="dropdown-item" href="<?= $helper->url("/logout") ?>">Sign out</a>
              </div>
            </div>
            <!-- Only in mobile nav -->
            <a class="nav-item nav-link ml-2 mr-2 d-block d-sm-none" href="<?= $helper->url("/account") ?>">Account Settings</a>
            <a class="nav-item nav-link ml-2 mr-2 d-block d-sm-none" href="<?= $helper->url("/logout") ?>">Sign out</a>
          <?php } ?>
        </div>
      </header> <?php

      if( file_exists(__DIR__."/".$file_name.".php") ) {
        include_once(__DIR__."/".$file_name.".php");
      } else {
        echo "$file_name no existe.";
      } ?>

      <footer id="page-footer" class="navbar navbar-light justify-content-between flex-row-reverse">
        <div class="nav">
          <?php if( $auth->check() ) { ?>
            <small class="nav-item"><a class="nav-link text-info" href="/logout">Sign out</a></small>
          <?php } ?>
        </div>
        <small class="copy">Copyright &copy; <?= date("Y") ?> <a href="http://yosoydev.net">YoSoyDev</a>. <br class="xs-only"/>All rights reserved.</small>
      </footer>
    </div>
    <?php

    if($file_name === "reportes/resumen") { ?>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script> <?php
    } ?>
    <script src="<?= $helper->url("/dist/vue.min.js") ?>"></script>
    <script src="<?= $helper->url("/dist/Address.min.js") ?>"></script>
    <script src="<?= $helper->url("/dist/main.min.js") ?>"></script>
  </body>
</html>