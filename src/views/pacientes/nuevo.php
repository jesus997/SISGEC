<div id="nuevo-paciente">
    <div class="container">
        <div class="row">
            <h1 class="py-2">Registrar nuevo paciente</h1>
        </div>
        <form action="<?= $helper->url("/pacientes/nuevo") ?>" method="POST">
            <div class="row my-3">
                <div class="col"> 
                    <input type="text" class="form-control" name="nombre" placeholder="Nombre(s)" required>
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="apellido" placeholder="Apellidos" required>
                </div>
            </div>
            <div class="row my-3">
                <div class="col">
                    <input id="fecha-nacimiento" type="text" class="form-control" placeholder="Fecha de nacimiento" required>
                </div>
                <div class="col">
                    <label class="mr-3">Sexo</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" id="sexom" name="sexo" type="radio" value="M" required>
                        <label class="form-check-label" for="sexom">Masculino</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" id="sexof" name="sexo" type="radio" value="F" required>
                        <label class="form-check-label" for="sexof">Femenino</label>
                    </div>
                </div>
            </div>
            <div class="row my-3">
                <div class="col">
                    <input type="text" class="form-control" name="ocupacion" placeholder="Ocupación">
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="origen" placeholder="Origen">
                </div>
            </div>
            <div class="row my-3">
                <div class="col">
                    <input type="text" class="form-control" name="religion" placeholder="Religión">
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="escolaridad" placeholder="Escolaridad">
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row my-3">
                        <div class="col">
                            <input v-model="zipcode" v-on:keyup="getAddressFromZipCode" type="text" class="form-control" name="direccion[zipcode]" placeholder="Codigo Postal">
                        </div>
                        <div class="col">
                            <select id="colonia" v-model="colonia" class="form-control" name="direccion[colonia]" placeholder="Colonia" required>
                                <option v-for="(col, index) in colonias" v-bind:value="col" v-bind:selected="index === 0">{{ col }}</option>
                            </select>
                        </div>
                        <div class="col">
                            <input v-model="ciudad" type="text" class="form-control" name="direccion[ciudad]" placeholder="Ciudad" required>
                        </div>
                        <div class="col">
                            <input v-model="pais" type="text" class="form-control" name="direccion[pais]" placeholder="Pais" required>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-3">
                            <input type="text" v-model="estado" class="form-control" name="direccion[estado]" placeholder="Estado">
                        </div>
                        <div class="col-4">
                            <input type="text" class="form-control" name="direccion[calle]" placeholder="Calle">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" name="direccion[numero_int]" placeholder="Numero Interior">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" name="direccion[numero_ext]" placeholder="Numero Exterior">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-3">
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col">
                            <input id="phone" type="text" class="form-control" name="telefono[numero]" placeholder="Teléfono">
                        </div>
                        <div class="col-3">
                            <input type="number" min="0" class="form-control" name="telefono[extencion]" placeholder="Ext">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <input type="email" class="form-control" name="email" placeholder="E-mail">
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