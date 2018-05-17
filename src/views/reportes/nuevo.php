<div id="antecedentes-familiares">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="py-2">Antecedentes</h1>
                <h3>a) Heredo Familiares</h3>
                <p>Marcar todas las que apliquen y especificar quien la ha padecido.</p>
            </div>
        </div>
        <form action="<?= $helper->url("/reportes/nuevo") ?>" method="POST">
            <input type="hidden" name="familiares[medical_history]" value="<?= $medical_history ?>" />
            <div class="row mt-3">
                <div class="col-4"> 
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" id="diabetes" aria-label="Diabetes">
                                <label for="diabetes" class="mb-0 ml-1">Diabetes</label>
                            </div>
                        </div>
                        <input type="text" class="form-control" name="familiares[diabetes]" aria-label="Diabetes" placeholder="¿Quien lo padecio?">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" id="hepatopatia"  aria-label="Hepatopatia">
                                <label for="hepatopatia" class="mb-0 ml-1">Hepatopatia</label>
                            </div>
                        </div>
                        <input type="text" class="form-control" name="familiares[hepatopatia]" aria-label="Hepatopatia" placeholder="¿Quien lo padecio?">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" id="asma"  aria-label="Asma">
                                <label for="asma" class="mb-0 ml-1">Asma</label>
                            </div>
                        </div>
                        <input type="text" class="form-control" name="familiares[asma]" aria-label="Asma" placeholder="¿Quien lo padecio?">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" id="endocrinas"  aria-label="Endrocrinas">
                                <label for="endocrinas" class="mb-0 ml-1">Endrocrinas</label>
                            </div>
                        </div>
                        <input type="text" class="form-control" name="familiares[endocrinas]" aria-label="Endrocrinas" placeholder="¿Quien lo padecio?">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend input-group-extend">
                            <div class="input-group-text">
                                <input type="checkbox" id="intynegados"  aria-label="Interrogados y Negados">
                                <label for="intynegados" class="mb-0 ml-1">Interrogados y Negados</label>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- -->
                <div class="col">
                    <div class="row">
                        <div class="col"> 
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="checkbox" id="hipertension"  aria-label="Hipertensión">
                                        <label for="hipertension" class="mb-0 ml-1">Hipertensión</label>
                                    </div>
                                </div>
                                <input type="text" class="form-control" name="familiares[hipertension]" aria-label="Hipertensión" placeholder="¿Quien lo padecio?">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="checkbox" id="nefropatia"  aria-label="Nefropatía">
                                        <label for="nefropatia" class="mb-0 ml-1">Nefropatía</label>
                                    </div>
                                </div>
                                <input type="text" class="form-control" name="familiares[nefropatia]" aria-label="Nefropatía" placeholder="¿Quien lo padecio?">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="checkbox" id="cancer"  aria-label="Cáncer">
                                        <label for="cancer" class="mb-0 ml-1">Cáncer</label>
                                    </div>
                                </div>
                                <input type="text" class="form-control" name="familiares[cancer]" aria-label="Cáncer" placeholder="¿Quien lo padecio?">
                            </div>
                        </div>
                        <!-- -->
                        <div class="col"> 
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="checkbox" id="cardiopatia"  aria-label="Cardiopatía">
                                        <label for="cardiopatia" class="mb-0 ml-1">Cardiopatía</label>
                                    </div>
                                </div>
                                <input type="text" class="form-control" name="familiares[cardiopatia]" aria-label="Cardiopatía" placeholder="¿Quien lo padecio?">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="checkbox" id="mentales"  aria-label="Enf. Mentales">
                                        <label for="mentales" class="mb-0 ml-1">Enf. Mentales</label>
                                    </div>
                                </div>
                                <input type="text" class="form-control" name="familiares[enf.-mentales]" aria-label="Enf. Mentales" placeholder="¿Quien lo padecio?">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="checkbox" id="alergicas"  aria-label="Enf. Alérgicas">
                                        <label for="alergicas" class="mb-0 ml-1">Enf. Alérgicas</label>
                                    </div>
                                </div>
                                <input type="text" class="form-control" name="familiares[enf.-alergicas]" aria-label="Enf. Alérgicas" placeholder="¿Quien lo padecio?">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="checkbox" id="otros"  aria-label="Otros">
                                        <label for="otros" class="mb-0 ml-1">Otros</label>
                                    </div>
                                </div>
                                <input type="text" class="form-control" name="familiares[otros]" aria-label="Otros" placeholder="Especificar">
                            </div>
                        </div>
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