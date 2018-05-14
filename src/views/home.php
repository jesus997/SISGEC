<div class="banner">
  <img src="<?= $helper->url("/assets/imgs/medical-header-2.jpg") ?>" width="1280" height="375" alt="Header" />
</div>


<div id="welcome">
  <div class="container">
    <div class="card-deck">
      <div class="card text-white bg-dark">
        <a href="<?= $helper->url("/pacientes") ?>">
          <div class="card-body">
            <h5 class="card-title">Pacientes</h5>
            <p class="card-text">Ver, editar, agregar pacientes al sistema.</p>
          </div>
        </a>
      </div>

      <div class="card text-white bg-dark">
        <a href="<?= $helper->url("/recetas") ?>">
          <div class="card-body">
            <h5 class="card-title">Recetas</h5>
            <p class="card-text">Ver, editar, agregar recetas al sistema.</p>
          </div>
        </a>
      </div>

      <div class="card text-white bg-dark">
        <a href="<?= $helper->url("/reportes") ?>">
          <div class="card-body">
            <h5 class="card-title">Reportes Especiales</h5>
            <p class="card-text">Ver reportes de pacientes, recetas y citas del sistema.</p>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>