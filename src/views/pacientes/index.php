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
            <div class="col-12 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <blockquote class="blockquote">
                            <p>Buscar</p>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Buscar" aria-describedby="helpId">
                                <small id="helpId" class="text-muted">Busca por Nombre, Apellidos, Email o teléfono</small>
                            </div>
                        </blockquote>

                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action">...</a>
                            <a href="#" class="list-group-item list-group-item-action">...</a>
                            <a href="#" class="list-group-item list-group-item-action">...</a>
                            <a href="#" class="list-group-item list-group-item-action">...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>