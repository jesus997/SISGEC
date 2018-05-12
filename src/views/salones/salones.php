<div class="row text-white">
<div class="col-8 align-self-right">
    <h2 class="display-4 text-center text-muted">Salones</h2>
</div>
<div class="col-4 align-self-center text-center">
    <a class="btn btn-dark" href="<?= $helper->url("/salones/nuevo") ?>" role="button">Crear nuevo Salon</a>
    <form class="d-inline" target="_blank" action="<?= $helper->url("/reporte/salones") ?>" method="POST"><button class="btn btn-dark" type="submit">Imprimir</button></form>
</div>
</div>
<table class="table">
    <thead class="thead-dark">
        <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Descripción</th>
        <th scope="col">Capacidad</th>
        <th scope="col">Tipo</th>
        <th colspan="3" class="text-center">Acciones</th>
        </tr>
    </thead>
    <tbody><?php
        if(count($salones) > 0) {
            foreach($salones as $salon) { ?>
                <tr>
                    <th scope="row"><?= $salon['idSalon'] ?></th>
                    <td><?= $salon['Nombre'] ?></td>
                    <td><?= $salon['Descripcion'] ?></td>
                    <td><?= $salon['Capacidad'] ?> personas</td>
                    <td><?= $salon['Tipo'] ?></td>
                    <td><a class="btn btn-link text-primary" href="<?= $helper->url("/salon/{$salon['idSalon']}/eventos") ?>">Ver</a></td>
                    <td><a class="btn btn-link text-secondary" href="<?= $helper->url("/salon/{$salon['idSalon']}/editar") ?>">Editar</a></td>
                    <td><form action="<?= $helper->url("/salon/{$salon['idSalon']}/borrar") ?>" method="POST"><button class="btn btn-link text-danger">Borrar</button></form></td>
                </tr> <?php
            }
        } else { ?>
            <tr>
                <td colspan="9" class="text-center">
                    Aún no has creado ningún salon. <a href="<?= $helper->url("/salones/nuevo") ?>">Crea uno</a>.
                </td>
            </tr> <?php
        } ?>
    </tbody>
</table>