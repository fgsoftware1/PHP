<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>upload de ficheiros</title>
    </head>
    <body>
        <form name="frmUpload" method="post" enctype="multipart/form-data" action="upload.php">
            <label for="fileObj">Selecione um ficheiro</label>
            <input type="file" name="fileUpload" id="fileObj">
            <button type="submit" name="cmdSend">Enviar</button>
        </form>
    </body>
</html>