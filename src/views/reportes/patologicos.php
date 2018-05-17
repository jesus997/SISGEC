<div id="antecedentes-personales-patologicos">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="py-2">Antecedentes</h1>
                <h3>b) Personales Patologicos</h3>
                <p>Marcar todas las que apliquen y especificar.</p>
            </div>
        </div>
        <form action="<?= $helper->url("/reportes/patologicos/{$report_id}") ?>" method="POST">
            <input type="hidden" name="patologicos[report_id]" value="<?= $report_id ?>" />
            <div class="row mt-3">
                <div class="col">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" id="enfactuales" aria-label="Enfermedades Actuales">
                                <label for="enfactuales" class="mb-0 ml-1">Enfermedades Actuales</label>
                            </div>
                        </div>
                        <input type="text" class="form-control" name="patologicos[enfactuales]" aria-label="Enfermedades Actuales" placeholder="">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" id="quirurgicos" aria-label="Quirúrgicos">
                                <label for="quirurgicos" class="mb-0 ml-1">Quirúrgicos</label>
                            </div>
                        </div>
                        <input type="text" class="form-control" name="patologicos[quirurgicos]" aria-label="Quirúrgicos" placeholder="">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" id="transfusionales" aria-label="Transfusionales">
                                <label for="transfusionales" class="mb-0 ml-1">Transfusionales</label>
                            </div>
                        </div>
                        <input type="text" class="form-control" name="patologicos[transfusionales]" aria-label="Transfusionales" placeholder="">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" id="alergias" aria-label="Alergias">
                                <label for="alergias" class="mb-0 ml-1">Alergias</label>
                            </div>
                        </div>
                        <input type="text" class="form-control" name="patologicos[alergias]" aria-label="Alergias" placeholder="">
                    </div>
                </div>
                <div class="col">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" id="traumaticos" aria-label="Traumáticos">
                                <label for="traumaticos" class="mb-0 ml-1">Traumáticos</label>
                            </div>
                        </div>
                        <input type="text" class="form-control" name="patologicos[traumaticos]" aria-label="Traumáticos" placeholder="">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" id="hospiprevi" aria-label="Hospitalizaciones Previas">
                                <label for="hospiprevi" class="mb-0 ml-1">Hospitalizaciones Previas</label>
                            </div>
                        </div>
                        <input type="text" class="form-control" name="patologicos[hospiprevi]" aria-label="Hospitalizaciones Previas" placeholder="">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" id="adicciones" aria-label="Adicciones">
                                <label for="adicciones" class="mb-0 ml-1">Adicciones</label>
                            </div>
                        </div>
                        <input type="text" class="form-control" name="patologicos[adicciones]" aria-label="Adicciones" placeholder="">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" id="otros" aria-label="Otros">
                                <label for="otros" class="mb-0 ml-1">Otros</label>
                            </div>
                        </div>
                        <input type="text" class="form-control" name="patologicos[otros]" aria-label="Otros" placeholder="">
                    </div>
                </div>
            </div>
            <div class="form-group row my-3">
                <div class="col-12 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Siguiente</button>
                </div>
            </div>
        </form>
    </div>
</div>