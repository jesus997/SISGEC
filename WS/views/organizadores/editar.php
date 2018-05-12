<h2 class="display-4 text-center text-muted py-3">Editar <?= $org['Nombres'] ?></h2>
<!-- Formulario de Registro -->
<div class="container align-self-center">
    <form action="<?= $helper->url("/organizador/".$org['idPersona']."/editar") ?>" method="POST">
        <div class="row">
            <div class="col">
                <input type="text" name="Nombres" class="form-control" placeholder="Nombre(s)" value="<?= $org['Nombres'] ?>" required>
            </div>
            <div class="col">
                <input type="text" name="Apellidos" class="form-control" placeholder="Apellido(s)" value="<?= $org['Apellidos'] ?>" required>
            </div>
            <div class="col">
                <input type="tel" name="Telefono" class="form-control" maxlength="10" pattern="[0-9]+" placeholder="Telefono" value="<?= $org['Telefono'] ?>" required>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col">
                <input type="text" name="Empresa" class="form-control" placeholder="Empresa" value="<?= $org['Empresa'] ?>" required>
            </div>
            <div class="col">
                <input type="text" name="RFC" class="form-control" placeholder="RFC" value="<?= $org['RFC'] ?>" required>
            </div>
            <div class="col">
                <input type="email" name="Correo" class="form-control" id="inputEmail4" placeholder="Correo" value="<?= $org['Correo'] ?>" required>
            </div>
            <div class="col">
                <input type="password" name="Contrasena" class="form-control" id="inputPassword4" placeholder="Nueva Contraseña">
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-4">
                <input type="text" name="direccion[Calle]" class="form-control" placeholder="calle" value="<?= $org['direccion']['Calle'] ?>" required>
            </div>
            <div class="col">
                <input type="text" name="direccion[NumeroExt]" class="form-control" placeholder="Numero exterior" value="<?= $org['direccion']['NumeroExt'] ?>" required>
            </div>
            <div class="col">
                <input type="text" name="direccion[NumeroInt]" class="form-control" placeholder="Numero interior" value="<?= $org['direccion']['NumeroInt'] ?>">
            </div>
            <div class="col">
                <input type="text" name="direccion[Colonia]" class="form-control" placeholder="Colonia" value="<?= $org['direccion']['Colonia'] ?>" required>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col">
                <input type="text" name="direccion[Municipio]" class="form-control" placeholder="Ciudad" value="<?= $org['direccion']['Municipio'] ?>" required>
            </div>
            <div class="col">
                <input type="text" name="direccion[Estado]" class="form-control" placeholder="Estado" value="<?= $org['direccion']['Estado'] ?>" required>
            </div>
            <div class="col">
                <input type="text" name="direccion[Pais]" class="form-control" placeholder="País" value="<?= $org['direccion']['Pais'] ?>" required>
            </div>
            <div class="col">
                <input type="text" name="direccion[CodigoPostal]" class="form-control" placeholder="Código Postal" value="<?= $org['direccion']['CodigoPostal'] ?>">
            </div>
        </div>
        <div class="row py-3 px-3">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>  
        
    </form>
</div>