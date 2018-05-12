<h2 class="display-4 text-center text-muted py-3">Salones</h2>
<div class="card-deck"> <?php
if($salones['code'] === "ok" && count($salones['response']) > 0) {
    foreach($salones['response'] as $salon) { ?>
        <div class="card">
            <img class="card-img-top" src="<?= $helper->localImage($salon['imagen']) ?>" alt="<?= $salon['Nombre'] ?>">
            <div class="card-body">
                <h5 class="card-title"><?= $salon['Nombre'] ?></h5>
                <p class="card-text"><?= $salon['Descripcion'] ?></p>
                <p class="card-text">Capacidad: <?= $salon['Capacidad'] ?> personas</p>
                <p class="card-text">Tipo de salon: <?= $salon['Tipo'] ?> </p>
            </div>
            <div class="card-footer">
                <a href="<?= $helper->url("/salon/{$salon["idSalon"]}/eventos") ?>" class="btn btn-dark">Eventos</a>
            </div>
        </div> <?php
    }
} ?>
</div>