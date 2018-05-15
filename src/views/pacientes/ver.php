<div id="ver-paciente">
    <div class="container">
        
        <h1 class="py-2">Paciente: <?= $paciente->fullname ?></h1>

        <div class="row">
            <table class="table table-borderless table-responsive">
                <thead class="thead-default d-none">
                    <tr>
                        <th>Campo</th>
                        <th>Valor</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Nombre(s)</td>
                        <td><?= $paciente->name ?></td>
                    </tr>
                    <tr>
                        <td>Apellidos</td>
                        <td><?= $paciente->lastname ?></td>
                    </tr>
                    <tr>
                        <td>Fecha de nacimiento</td>
                        <td><?= $paciente->birthdate ?> (<?= $helper->calculeAge($paciente->birthdate) ?> años)</td>
                    </tr>
                    <tr>
                        <td>Genero</td>
                        <td><?= $paciente->gender === 'M' ? 'Masculino' : 'Femenino' ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>