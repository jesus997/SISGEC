<h2 class="display-4 text-center text-muted py-3">Agregar Organizador</h2>
<!-- Formulario de Registro -->
<div class="container align-self-center">  
    <form action="<?= $helper->url("/organizadores/nuevo") ?>" method="POST">
        <div class="row">
            <div class="col">
                <input type="text" name="Nombres" class="form-control" placeholder="Nombre(s)" required>
            </div>
            <div class="col">
                <input type="text" name="Apellidos" class="form-control" placeholder="Apellido(s)" required>
            </div>
            <div class="col">
                <input type="tel" name="Telefono" class="form-control" maxlength="10" pattern="[0-9]+" placeholder="Telefono" required>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col">
                <input type="text" name="Empresa" class="form-control" placeholder="Empresa" required>
            </div>
            <div class="col">
                <input type="text" name="RFC" class="form-control" placeholder="RFC" required>
            </div>
            <div class="col">
                <input type="email" name="Correo" class="form-control" id="inputEmail4" placeholder="Correo" required>
            </div>
            <div class="col">
                <input type="password" name="Contrasena" class="form-control" id="inputPassword4" placeholder="Contraseña" required>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-4">
                <input type="text" name="direccion[Calle]" class="form-control" placeholder="calle" required>
            </div>
            <div class="col">
                <input type="text" name="direccion[NumeroExt]" class="form-control" placeholder="Numero exterior" required>
            </div>
            <div class="col">
                <input type="text" name="direccion[NumeroInt]" class="form-control" placeholder="Numero interior">
            </div>
            <div class="col">
                <input type="text" name="direccion[Colonia]" class="form-control" placeholder="Colonia" required>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col">
                <input type="text" name="direccion[Municipio]" class="form-control" placeholder="Ciudad" required>
            </div>
            <div class="col">
                <input type="text" name="direccion[Estado]" class="form-control" placeholder="Estado" required>
            </div>
            <div class="col">
                <input type="text" name="direccion[Pais]" class="form-control" placeholder="País" required>
            </div>
            <div class="col">
                <input type="text" name="direccion[CodigoPostal]" class="form-control" placeholder="Código Postal">
            </div>
        </div>
        <div class="row py-3 px-3">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>  
        
    </form>
</div>