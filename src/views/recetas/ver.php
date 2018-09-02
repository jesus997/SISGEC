<div id="nuevo-paciente">
    <div class="container">
        <div class="row">
            <h1 class="col-12 py-2">Ver/Editar receta</h1> <?php
            if(isset($error) && !empty($error)) {
                $errorClass = " is-invalid"; ?>
                <div class="col-12 alert alert-danger" role="alert">
                    <?= $error ?>
                </div> <?php
            } else {
                $errorClass = "";
            } ?>
        </div>
        <form action="<?= $helper->url("/recetas/guardar/{$receta->id}") ?>" method="POST">
            <input type="hidden" name="id" value="<?= $receta->id ?>">
            <div class="row my-3">
                <div class="col">
                    <input name="patient_id" type="text" class="form-control"  value="<?= $patient->id ?>" readonly>
                </div>
                <div class="col">
                    <input name="folio" type="text" class="form-control"  value="<?= $receta->folio ?>" readonly>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div id="content" class="tinymce" name="diagnostico"><?= $receta->content ?></div>
                </div>
            </div>
            <div class="form-group row my-3">
                <div class="col-12 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.7.13/tinymce.min.js"></script>
<script>
    var content = document.getElementById("content").innerHTML; 
tinymce.init({
    selector: '.tinymce',
    height: 300,
    theme: 'modern',
    plugins: 'table link paste contextmenu textpattern autolink codesample',
    insert_toolbar: 'quicktable codesample',
    selection_toolbar: 'bold italic | quicklink h2 h3 blockquote',
    setup : function(editor) {
      editor.setContent(content);
    },
    content_css: [
        '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
        '//www.tinymce.com/css/codepen.min.css']
});</script>