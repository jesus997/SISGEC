<div id="ver-paciente" class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="card">
                    <img src="<?= $helper->url("/assets/imgs/{$paciente->gender}.svg") ?>" class="card-img-top" />
                    <a href="<?= $helper->url("/paciente/{$paciente->id}/editar") ?>" class="btn btn-primary">Editar</a>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Información</a>
                            </li>
                        </ul>
                        <span class="last-update">Ultima actualización: <?= $paciente->updated_date ?></span>
                    </div>
                    <div class="card-body patient-box">
                        <h5 class="card-title"><?= $paciente->fullname ?></h5>
                        <p class="card-text"><strong>Fecha de nacimiento</strong>: <?= $paciente->birthdate ?> (<?= $helper->calculeAge($paciente->birthdate) ?> años)</p>
                        <p class="card-text"><strong>Genero</strong>: <?= $paciente->gender === 'M' ? 'Masculino' : 'Femenino' ?></p>
                        <p class="card-text"><strong>Dirección</strong>: <?= $paciente->getStringAddress() ?></p>
                        <p class="card-text"><strong>Origen</strong>: <?= $paciente->origin ?></p>
                        <p class="card-text"><strong>Reside</strong>: <?= $paciente->reside ?></p>
                        <p class="card-text"><strong>Teléfono</strong>: <?= $paciente->phone ?></p>
                        <p class="card-text"><strong>Religión</strong>: <?= $paciente->religion ?></p>
                        <p class="card-text"><strong>Escolaridad</strong>: <?= $paciente->scholarship ?></p>
                        <p class="card-text"><strong>Email</strong>: <?= $paciente->email ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <div class="row mt-3">
                    <div class="col">
                        <h4>Historial Clinico</h4>
                    </div>
                    <div class="col text-right"> <?php
                        if(count($paciente->getReportes()) > 0) { ?>
                            <a href="<?= $helper->url("/reportes/nuevo/{$paciente->medical_history_id}") ?>" class="btn btn-dark">Crear reporte</a> <?php
                        } ?>
                    </div>
                </div>
                <div class="row"> <?php
                    if(count($paciente->getReportes()) > 0) {
                        foreach($paciente->getReportes() as $reporte) { ?>
                            <div class="col-4 mt-3">
                                <a href="<?= $helper->url("/reportes/resumen/{$reporte['id']}") ?>">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Reporte N. <?= $paciente->id.$paciente->medical_history_id.$reporte['id'] ?></h4>
                                            <small class="card-text">Creación: <?= $helper->humanFecha($reporte['created_date']) ?></small><br/>
                                            <!--<small class="card-text">Actualización: <?= $helper->humanFecha($reporte['updated_date']) ?></small>-->
                                        </div>
                                    </div>
                                </a>
                            </div> <?php
                        }
                    } else { ?>
                        <div class="col">
                            <div class="card text-center">
                                <div class="card-body">
                                    <p>No se han encontrado reportes para este paciente. </p>
                                    <a href="<?= $helper->url("/reportes/nuevo/{$paciente->medical_history_id}") ?>" class="btn btn-primary">Crea uno</a>
                                </div>
                            </div>
                        </div> <?php
                    } ?>
                </div>
            </div>
        </div>
    </div>
</div>