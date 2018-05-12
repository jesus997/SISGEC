<h2 class="display-4 text-center text-muted py-3">Editar <?= $evento['Nombre'] ?></h2>

<div class="container align-self-center">  
    <form action="<?= $helper->url("/evento/".$evento['idEvento']."/editar") ?>" method="POST">
        <div class="row">
            <div class="col">
                <input type="text" name="Nombre" class="form-control" placeholder="Nombre del Evento" value="<?= $evento['Nombre'] ?>" required>
            </div>
            <div class="col">
                <select name="idSalon" class="form-control" required>
                    <option selected>Seleccione un salon</option> <?php
                    foreach($salones as $salon) { ?>
                        <option <?= ($salon['idSalon'] == $salon['idSalon'] ? 'selected' : '') ?> value="<?= $salon['idSalon'] ?>"><?= $salon['Nombre'] ?></option> <?php
                    } ?>
                </select>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col">
                <select name="Tipo" class="form-control" required>
                    <option value="">Tipo de Evento</option>
                    <option value="Boda" <?= ($evento['Tipo'] === "Boda" ? 'selected' : '') ?>>Boda</option>
                    <option value="XV años" <?= ($evento['Tipo'] === "XV años" ? 'selected' : '') ?>>XV años</option>
                    <option value="Bautizo" <?= ($evento['Tipo'] === "Bautizo" ? 'selected' : '') ?>>Bautizo</option>
                    <option value="Primera Comunión" <?= ($evento['Tipo'] === "Primera Comunión" ? 'selected' : '') ?>>Primera Comunión</option>
                    <option value="Graduación" <?= ($evento['Tipo'] === "Graduación" ? 'selected' : '') ?>>Graduación</option>
                    <option value="Aniversario" <?= ($evento['Tipo'] === "Aniversario" ? 'selected' : '') ?>>Aniversario</option>
                    <option value="Cumpleaños" <?= ($evento['Tipo'] === "Cumpleaños" ? 'selected' : '') ?>>Cumpleaños</option>
                    <option value="Conmemoración" <?= ($evento['Tipo'] === "Conmemoración" ? 'selected' : '') ?>>Conmemoración</option>
                    <option value="Reunión" <?= ($evento['Tipo'] === "Reunión" ? 'selected' : '') ?>>Reunión</option>
                    <option value="Show" <?= ($evento['Tipo'] === "Show" ? 'selected' : '') ?>>Show</option>
                    <option value="Debate" <?= ($evento['Tipo'] === "Debate" ? 'selected' : '') ?>>Debate</option>
                    <option value="Panel" <?= ($evento['Tipo'] === "Panel" ? 'selected' : '') ?>>Panel</option>
                    <option value="Mesa Redonda" <?= ($evento['Tipo'] === "Mesa Redonda" ? 'selected' : '') ?>>Mesa Redonda</option>
                    <option value="Taller" <?= ($evento['Tipo'] === "Taller" ? 'selected' : '') ?>>Taller</option>
                    <option value="Seminario" <?= ($evento['Tipo'] === "Seminario" ? 'selected' : '') ?>>Seminario</option>
                    <option value="Conferencia" <?= ($evento['Tipo'] === "Conferencia" ? 'selected' : '') ?>>Conferencia</option>
                    <option value="Simposio" <?= ($evento['Tipo'] === "Simposio" ? 'selected' : '') ?>>Simposio</option>
                    <option value="Congreso" <?= ($evento['Tipo'] === "Congreso" ? 'selected' : '') ?>>Congreso</option>
                    <option value="Convención" <?= ($evento['Tipo'] === "Convención" ? 'selected' : '') ?>>Convención</option>
                    <option value="Foro" <?= ($evento['Tipo'] === "Foro" ? 'selected' : '') ?>>Foro</option>
                    <option value="Curso" <?= ($evento['Tipo'] === "Curso" ? 'selected' : '') ?>>Curso</option>
                    <option value="Curso-Taller" <?= ($evento['Tipo'] === "Curso-Taller" ? 'selected' : '') ?>>Curso-Taller</option>
                </select>
            </div>
            <div class="col">
                <input class="datepicker1" id="input" width="276" name="FechaInicio" placeholder="Fecha y hora de Inicio" value="<?= $evento['FechaInicio'] ?>" required/>
            </div>
            <div class="col">
                <input class="datepicker2" id="input1" width="276" name="FechaFin" placeholder="Fecha y hora de Fin" value="<?= $evento['FechaFin'] ?>" required/>
            </div>
        </div>

        <div class="row pt-3">
        <div class="col-12">
            <label for="cronograma">Cronograma</label>
            <textarea class="form-control tinymce" name="Cronograma" id="cronograma" rows="3" placeholder="Ingrese horarios y actos"><?= $evento['Cronograma'] ?></textarea>
        </div>
        <div class="col-12 mt-2">
            <label for="invitados">Lista de Invitados</label>
            <textarea class="form-control" name="Asistentes" id="invitados" rows="3" placeholder="Ingrese los nombres de invitados" required><?= $evento['Asistentes'] ?></textarea>
        </div>
        </div>

        
        <div class="row py-3 px-3">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>  
        
    </form>
</div>