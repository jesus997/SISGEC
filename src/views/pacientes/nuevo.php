<div id="nuevo-paciente">
    <div class="container">
        <div class="row">
            <h1 class="col-12 py-2">Registrar nuevo paciente</h1> <?php
            if(isset($error) && !empty($error)) {
                $errorClass = " is-invalid"; ?>
                <div class="col-12 alert alert-danger" role="alert">
                    <?= $error ?>
                </div> <?php
            } else {
                $errorClass = "";
            } ?>
        </div>
        <form action="<?= $helper->url("/pacientes/nuevo") ?>" method="POST">
            <div class="row my-3">
                <div class="col"> 
                    <input type="text" class="form-control" name="name" placeholder="Nombre(s)" required>
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="lastname" placeholder="Apellidos" required>
                </div>
            </div>
            <div class="row my-3">
                <div class="col">
                    <input id="fecha-nacimiento" name="birthdate" type="text" class="form-control" placeholder="Fecha de nacimiento" required>
                </div>
                <div class="col">
                    <label class="mr-3">Sexo</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" id="sexom" name="gender" type="radio" value="M" required>
                        <label class="form-check-label" for="sexom">Masculino</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" id="sexof" name="gender" type="radio" value="F" required>
                        <label class="form-check-label" for="sexof">Femenino</label>
                    </div>
                </div>
            </div>
            <div class="row my-3">
                <div class="col">
                    <input type="text" class="form-control" name="origin" placeholder="Origen">
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="reside" placeholder="Reside">
                </div>
            </div>
            <div class="row my-3">
                <div class="col">
                    <input type="text" class="form-control" name="religion" placeholder="Religión">
                </div>
                <div class="col">
                    <select id="escolaridad" class="form-control" name="scholarship">
                        <option value="Nula">Nula</option>
                        <option value="Primaria">Primaria</option>
                        <option value="Secundaria">Secundaria</option>
                        <option value="Preparatoria">Preparatoria</option>
                        <option value="Universidad">Universidad</option>
                        <option value="Maestria">Maestria</option>
                        <option value="Doctorado">Doctorado</option>
                    </select>
                </div>
            </div>
            <div id="address-zone">
                <dinamic-address></dinamic-address>
            </div>
            <div class="row my-3">
                <div class="col">
                    <input id="phone" type="text" class="form-control" name="phone" placeholder="Teléfono">
                </div>
                <div class="col">
                    <input type="email" class="form-control" name="email" placeholder="E-mail">
                </div>
            </div>
            <div class="form-group row my-3">
                <div class="col-12 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </form>
    </div>
</div>