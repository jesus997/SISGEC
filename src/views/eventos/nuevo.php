<h2 class="display-4 text-center text-muted py-3">Crear un Evento</h2>

<div class="container align-self-center">  
    <form action="<?= $helper->url("/eventos/nuevo") ?>" method="POST">
        <div class="row">
            <div class="col">
                <input type="text" name="Nombre" class="form-control" placeholder="Nombre del Evento" required>
            </div>
            <div class="col">
                <select name="idSalon" class="form-control" required>
                    <option selected>Seleccione un salon</option> <?php
                    foreach($salones as $salon) { ?>
                        <option value="<?= $salon['idSalon'] ?>"><?= $salon['Nombre'] ?></option> <?php
                    } ?>
                </select>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col">
                <select name="Tipo" class="form-control" required>
                <option selected>Tipo de Evento</option>
                <option>Boda</option>
                <option>XV años</option>
                <option>Bautizo</option>
                <option>Primera Comunión</option>
                <option>Graduación</option>
                <option>Aniversario</option>
                <option>Cumpleaños</option>
                <option>Conmemoración</option>
                <option>Reunión</option>
                <option>Show</option>
                <option>Debate</option>
                <option>Panel</option>
                <option>Mesa Redonda</option>
                <option>Taller</option>
                <option>Seminario</option>
                <option>Conferencia</option>
                <option>Simposio</option>
                <option>Congreso</option>
                <option>Convención</option>
                <option>Foro</option>
                <option>Curso</option>
                <option>Curso-Taller</option>
                </select>
            </div>
            <div class="col">
                <input class="datepicker1" id="input" width="276" name="FechaInicio" placeholder="Fecha y hora de Inicio" required/>
            </div>
            <div class="col">
                <input class="datepicker2" id="input1" width="276" name="FechaFin" placeholder="Fecha y hora de Fin" required/>
            </div>
        </div>

        <div class="row pt-3">
        <div class="col-12">
            <label for="cronograma">Cronograma</label>
            <textarea class="form-control tinymce" name="Cronograma" id="cronograma" rows="3" placeholder="Ingrese horarios y actos"></textarea>
        </div>
        <div class="col-12 mt-2">
            <label for="invitados">Lista de Invitados</label>
            <textarea class="form-control" name="Asistentes" id="invitados" rows="3" placeholder="Ingrese los nombres de invitados" required></textarea>
        </div>
        </div>

        
        <div class="row py-3 px-3">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>  
        
    </form>
</div>