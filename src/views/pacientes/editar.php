<div id="nuevo-paciente">
    <div class="container">
        <div class="row">
            <h1 class="col-12 py-2">Editar paciente</h1> <?php
            if(isset($error) && !empty($error)) {
                $errorClass = " is-invalid"; ?>
                <div class="col-12 alert alert-danger" role="alert">
                    <?= $error ?>
                </div> <?php
            } else {
                $errorClass = "";
            } ?>
        </div>
        <form action="<?= $helper->url("/paciente/{$paciente['id']}/guardar") ?>" method="POST">
            <div class="row my-3">
                <div class="col"> 
                    <input type="text" class="form-control" name="name" value="<?= $paciente['name'] ?>" placeholder="Nombre(s)" required>
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="lastname" value="<?= $paciente['lastname'] ?>" placeholder="Apellidos" required>
                </div>
            </div>
            <div class="row my-3">
                <div class="col">
                    <input id="fecha-nacimiento" name="birthdate" value="<?= $paciente['birthdate'] ?>" type="text" class="form-control" placeholder="Fecha de nacimiento" required>
                </div>
                <div class="col">
                    <label class="mr-3">Sexo</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" id="sexom" name="gender" type="radio" value="M" <?= $paciente['gender'] === "M" ? 'checked' : '' ?> required>
                        <label class="form-check-label" for="sexom">Masculino</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" id="sexof" name="gender" type="radio" value="F" <?= $paciente['gender'] === "F" ? 'checked' : '' ?> required>
                        <label class="form-check-label" for="sexof">Femenino</label>
                    </div>
                </div>
            </div>
            <div class="row my-3">
                <div class="col">
                    <input type="text" class="form-control" name="origin" value="<?= $paciente['origin'] ?>" placeholder="Origen">
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="reside" value="<?= $paciente['reside'] ?>" placeholder="Reside">
                </div>
            </div>
            <div class="row my-3">
                <div class="col">
                    <input type="text" class="form-control" name="religion" value="<?= $paciente['religion'] ?>" placeholder="Religión">
                </div>
                <div class="col"> <?php
                    $options = [
                        "Nula", "Primaria", "Secundaria", "Preparatoria", "Universidad",
                        "Maestria", "Doctorado"
                    ]; ?>
                    <select id="escolaridad" class="form-control" name="scholarship"> <?php
                        foreach($options as $option) { ?>
                            <option <?= $option === $paciente['scholarship'] ? 'selected' : '' ?> value="<?= $option ?>"><?= $option ?></option> <?php
                        } 
                        if( !in_array($paciente['scholarship'], $options) ) { ?>
                            <option selected value="<?= $paciente['scholarship'] ?>"><?= $paciente['scholarship'] ?></option> <?php
                        } ?>
                    </select>
                </div>
            </div>
            <div class="row my-3">
                <div class="col">
                    <input id="phone" type="text" class="form-control" name="phone" value="<?= $paciente['phone'] ?>" placeholder="Teléfono">
                </div>
                <div class="col">
                    <input type="email" class="form-control" name="email" value="<?= $paciente['email'] ?>" placeholder="E-mail">
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