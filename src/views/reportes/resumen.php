<div id="ver-paciente" class="mt-5">
    <div class="container">
        <div class="text-center my-3">
            <a id="imprimir-resumen" href="#" class="btn btn-primary">Guardar PDF</a>
            <a href="javascript:window.print()" class="btn btn-secondary">Imprimir</a>
            <a href="<?= $helper->url("/paciente/{$paciente->id}") ?>" class="btn btn-dark">Finalizar</a>
        </div>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Resumen de Reporte</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= $helper->url("/recetas/nueva/{$paciente->id}/{$reporte->id}") ?>">Añadir Receta</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body patient-box">
                        <div class="row">
                            <h2 class="col-12 card-title"><?= $paciente->fullname ?></h2>
                            <p class="col-4 card-text"><strong>Fecha de nacimiento</strong>: <?= $paciente->birthdate ?> (<?= $helper->calculeAge($paciente->birthdate) ?> años)</p>
                            <p class="col-2 card-text"><strong>Genero</strong>: <?= $paciente->gender === 'M' ? 'Masculino' : 'Femenino' ?></p>
                            <p class="col-3 card-text"><strong>Teléfono</strong>: <?= $paciente->phone ?></p>
                            <p class="col-3 card-text"><strong>Email</strong>: <?= $paciente->email ?></p>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <h4 class="card-title">Antecedentes</h4>
                            </div>
                        <?php
                            foreach($secciones as $seccion) { ?>
                                    <div class="col-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title mb-0"><?= $seccion['name'] ?></h5>
                                            </div>
                                            <ul class="list-group list-group-flush"> <?php  
                                                foreach($seccion['records'] as $record) { ?>
                                                    <li class="list-group-item"><strong><?= $record->name ?>:</strong> <?= $record->value ?></li> <?php
                                                } ?>
                                            </ul>
                                        </div>
                                    </div> <?php
                            }
                        ?>
                        </div>
                        <div class="row mt-3">
                            <h5 class="col-12 card-title">Padecimiento Actual</h5>
                            <div class="col-12 jumbotron jumbotron-fluid">
                                <div class="container">
                                    <p class="lead"><?= $reporte->current_condition ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <h5 class="col-12 card-title">Diagnostico</h5>
                            <div class="col-12 jumbotron jumbotron-fluid">
                                <div class="container">
                                    <p class="lead"><?= $reporte->diagnosis ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <h5 class="col-12 card-title">Tratamiento</h5>
                            <div class="col-12 jumbotron jumbotron-fluid">
                                <div class="container">
                                    <p class="lead"><?= $reporte->treatment ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <h5 class="col-12 card-title">Recetas</h5>
                            <div class="col-12">
                                <div class="row"> <?php
                                    foreach($recetas as $receta) { ?>
                                        <div class="col-4">
                                            <a href="<?= $helper->url("/recetas/ver/{$receta['id']}") ?>">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <p class="lead">Receta: #<?= $receta['folio'] ?></p>
                                                        <p class="lead">Fecha: <?= $receta['date'] ?></p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div> <?php
                                    } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>