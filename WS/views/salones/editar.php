<h2 class="display-4 text-center text-muted py-3">Editar <?= $salon['Nombre'] ?></h2>

<div class="container align-self-center">  
    <form action="<?= $helper->url("/salon/{$salon['idSalon']}/editar") ?>" method="POST">
        <div class="row">
            <div class="col">
                <input type="text" name="Nombre" class="form-control" placeholder="Nombre del Salon" value="<?= $salon['Nombre'] ?>" required>
            </div>
            <div class="col">
                <input type="number" name="Capacidad" class="form-control" placeholder="Capacidad del Salon" value="<?= $salon['Capacidad'] ?>" required>
            </div>
            <div class="col">
                <select name="Tipo" class="form-control" required>
                    <option selected>Tipo de Salon</option>
                    <option <?= ($salon['Tipo'] === "Festivos" ? 'selected' : '') ?> value="Festivos">Festivos</option>
                    <option <?= ($salon['Tipo'] === "Multiproposito" ? 'selected' : '') ?> value="Multiproposito">Multiproposito</option>
                    <option <?= ($salon['Tipo'] === "Audiovisual" ? 'selected' : '') ?> value="Audiovisual">Audiovisual</option>
                </select>
            </div>
        </div>

        <div class="row pt-3">
        <div class="col-12">
            <label for="invitados">Desripción Corta</label>
            <textarea class="form-control" id="invitados" rows="3" name="Descripcion" placeholder="..." required><?= $salon['Descripcion'] ?></textarea>
        </div>
        </div>

        
        <div class="row py-3 px-3">
        <button type="submit" class="btn btn-primary">Guardar</button>
        </div>  
        
    </form>
</div>