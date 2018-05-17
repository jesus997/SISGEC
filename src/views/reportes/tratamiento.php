<div id="pacientes">
    <div class="container">
        <h1 class="py-2">Tratamiento</h1>

        
        <form action="<?= $helper->url("/reportes/tratamiento/{$report_id}") ?>" method="POST">
            <input type="hidden" name="report_id" value="<?= $report_id ?>" />
            <div class="row">
                <div class="col-12">
                    <div class="tinymce" name="tratamiento"></div>
                </div>
            </div>
            <div class="form-group row my-3">
                <div class="col-12 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Siguiente</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.7.13/tinymce.min.js"></script>
<script>tinymce.init({
    selector: '.tinymce',
    height: 300,
    theme: 'modern',
    plugins: 'table link paste contextmenu textpattern autolink codesample',
    insert_toolbar: 'quicktable codesample',
    selection_toolbar: 'bold italic | quicklink h2 h3 blockquote',
    content_css: [
        '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
        '//www.tinymce.com/css/codepen.min.css']
});</script>