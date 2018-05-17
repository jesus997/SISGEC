<div id="pacientes">
    <div class="container">
        <h1 class="py-2">Pacientes</h1>

        <div class="row">
            <div class="col-12 col-sm-6">
                <div class="card registrar-paciente">
                  <div class="card-body d-flex align-items-center justify-content-center">
                      <a class="btn btn-lg btn-primary" href="<?= $helper->url("/pacientes/nuevo") ?>">Registrar Paciente</a>
                  </div>
                </div>
            </div>
            <div id="buscar-paciente" class="col-12 col-sm-6">
                <buscar-paciente></buscar-paciente>
            </div>
        </div>
    </div>
</div>