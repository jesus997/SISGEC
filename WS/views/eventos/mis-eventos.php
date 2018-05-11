<div class="row text-white">
<div class="col-8 align-self-right">
    <h2 class="display-4 text-center text-muted">Mis Eventos</h2>
</div>
<div class="col-2 align-self-center text-center">
    <a class="btn btn-dark" href="<?= $helper->url("/eventos/nuevo") ?>" role="button">Crear nuevo Evento</a>
</div>
</div>
<table class="table">
    <thead class="thead-dark">
        <tr>
        <th scope="col">#</th>
        <th scope="col">Salón</th>
        <th scope="col">Inicio</th>
        <th scope="col">Fin</th>
        <th scope="col">Nombre</th>
        <th scope="col">Tipo</th>
        <th scope="col">Participantes</th>
        <th scope="col">Cronograma</th>
        <th scope="col">Estado</th>
        </tr>
    </thead>
    <tbody><?php
        if(count($eventos) > 0) {
            foreach($eventos as $evento) {
                $status = "en-espera";
                if($helper->compareDates($evento['FechaInicio']) > 0 &&
                    $helper->compareDates($evento['FechaFin']) <= 0) {
                    $status = "en-progreso";
                } else if($helper->compareDates($evento['FechaFin']) > 0) {
                    $status = "finalizado";
                } ?>
                <tr>
                    <th scope="row"><?php $evento['idEvento'] ?></th>
                    <td><?= $evento['salon'] ?></td>
                    <td><?= $evento['FechaInicio'] ?></td>
                    <td><?= $evento['FechaFin'] ?></td>
                    <td><?= $evento['Nombre'] ?></td>
                    <td><?= $evento['Tipo'] ?></td>
                    <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#invitados-<?= $helper->slugify($evento['Nombre']).$evento['idEvento'] ?>">Lista invitados</button></td>
                    <td><button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#programa-<?= $helper->slugify($evento['Nombre']).$evento['idEvento'] ?>">Cronograma</button></td>
                    <td><?php
                        switch($status) {
                            case 'en-espera': ?>
                                <span class="badge badge-secondary">En espera</span> <?php
                                break;
                            case 'en-progreso': ?>
                                <span class="badge badge-success">En progreso</span> <?php
                                break;
                            case 'finalizado': ?>
                                <span class="badge badge-dark">Finalizado</span> <?php
                                break;
                        } ?>
                    </td>
                </tr> <?php
            }
        } else { ?>
            <tr>
                <td colspan="9" class="text-center">
                    Aún no has creado ningún evento. <a href="<?= $helper->url("/eventos/nuevo") ?>">Crea uno</a>.
                </td>
            </tr> <?php
        } ?>
    </tbody>
</table><?php

if(count($eventos) > 0) {
    foreach($eventos as $evento) { ?>
        <!-- Modal Participantes -->
        <div class="modal fade" id="invitados-<?= $helper->slugify($evento['Nombre']).$evento['idEvento'] ?>" tabindex="-1" role="dialog" aria-labelledby="<?= urlencode($evento['Nombre']).$evento['idEvento']."label" ?>" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="<?= $helper->slugify($evento['Nombre']).$evento['idEvento']."label" ?>">Lista de asistentes al evento: <?= $evento['Nombre'] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body"> <?php
                    $asistentes = $helper->toList($evento['Asistentes'], "\n"); ?>
                    <ul class="list-group"> <?php
                        foreach($asistentes as $asistente) { ?>
                            <li class="list-group-item"><?= $asistente ?></li> <?php
                        } ?>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
                </div>
            </div>
        </div> <?php
    }

    foreach($eventos as $evento) { ?>
        <!-- Modal Cronograma -->
        <div class="modal fade" id="programa-<?= $helper->slugify($evento['Nombre']).$evento['idEvento'] ?>" tabindex="-1" role="dialog" aria-labelledby="crono-<?= urlencode($evento['Nombre']).$evento['idEvento']."label" ?>" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="crono-<?= $helper->slugify($evento['Nombre']).$evento['idEvento']."label" ?>">Cronograma del evento: <?= $evento['Nombre'] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?= $evento['Cronograma'] ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
                </div>
            </div>
        </div> <?php
    }
}