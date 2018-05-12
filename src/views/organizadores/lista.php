<div class="row text-white">
<div class="col-8 align-self-right">
    <h2 class="display-4 text-center text-muted">Organizadores</h2>
</div>
<div class="col-4 align-self-center text-center">
    <a class="btn btn-dark" href="<?= $helper->url("/organizadores/nuevo") ?>" role="button">Añadir nuevo</a>
    <form class="d-inline" target="_blank" action="<?= $helper->url("/reporte/organizadores") ?>" method="POST"><button class="btn btn-dark" type="submit">Imprimir</button></form>
</div>
</div>
<table class="table">
    <thead class="thead-dark">
        <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre(s)</th>
        <th scope="col">Apellido(s)</th>
        <th scope="col">Correo</th>
        <th colspan="3" class="text-center">Acciones</th>
        </tr>
    </thead>
    <tbody><?php
        if(count($organizadores) > 0) {
            foreach($organizadores as $organizador) { ?>
                <tr>
                    <th scope="row"><?= $organizador['idPersona'] ?></th>
                    <td><?= $organizador['Nombres'] ?></td>
                    <td><?= $organizador['Apellidos'] ?></td>
                    <td><?= $organizador['Correo'] ?></td>
                    <td class="text-center"><button type="button" class="btn btn-link" data-toggle="modal" data-target="#persona-<?= $helper->slugify($organizador['Nombres']).$organizador['idPersona'] ?>">Ver</button></td>
                    <td class="text-center"><a class="btn btn-link text-secondary" href="<?= $helper->url("/organizador/{$organizador['idPersona']}/editar") ?>">Editar</a></td>
                    <td class="text-center"><form action="<?= $helper->url("/organizador/{$organizador['idPersona']}/borrar") ?>" method="POST"><button class="btn btn-link text-danger">Borrar</button></form></td>
                </tr> <?php
            }
        } else { ?>
            <tr>
                <td colspan="9" class="text-center">
                    Aún no has creado ningún organizador. <a href="<?= $helper->url("/organizadores/nuevo") ?>">Crea uno</a>.
                </td>
            </tr> <?php
        } ?>
    </tbody>
</table> <?php

if(count($organizadores) > 0) {
    foreach($organizadores as $organizador) { ?>
        <!-- Modal Participantes -->
        <div class="modal fade" id="persona-<?= $helper->slugify($organizador['Nombres']).$organizador['idPersona'] ?>" tabindex="-1" role="dialog" aria-labelledby="<?= urlencode($organizador['Nombres']).$organizador['idPersona']."label" ?>" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="<?= $helper->slugify($organizador['Nombres']).$organizador['idPersona']."label" ?>">Organizador: <?= $organizador['Nombres'] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Nombre: <small><?= $organizador['Nombres']." ".$organizador['Apellidos'] ?></small></li>
                        <li class="list-group-item">Correo Electronico: <small><?= $organizador['Correo'] ?></small></li>
                        <li class="list-group-item">Empresa: <small><?= $organizador['Empresa'] ?></small></li>
                        <li class="list-group-item">Dirección: <small><?= $this->getStringDirByID($organizador['Direccion_idDireccion']); ?></small></li>
                        <li class="list-group-item">Teléfono: <small><?= $organizador['Telefono'] ?></small></li>
                        <li class="list-group-item">RFC: <small><?= $organizador['RFC'] ?></small></li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
                </div>
            </div>
        </div> <?php
    }
}