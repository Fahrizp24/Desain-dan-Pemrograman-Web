<!DOCTYPE html>
<html>
    <head>
        <title>Multiupload Dokumen</title>
    </head>
    <body>
        <h2>Unggah Dokumen</h2>
        <form action="proses_upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file[]" multiple="multiple" accept=".word, .doc, .docx">
            <input type="submit" value="Unggah">
        </form>
    </body>
</html>