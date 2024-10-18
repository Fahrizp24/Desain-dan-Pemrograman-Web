<!DOCTYPE html>
<html>
    <head>
        <title>Unggah File Dokumen</title>
    </head>
    <body>
        <form action="upload_ajax.php" id="uploud-form" method="post" enctype="multipart/form-data">
            <input type="file" name="file" id="file">
            <input type="submit" name="submit" value="unggah">
        </form>
        <div id="status"></div>
        
        <script src="../jquery-3.7.1.js"></script>
        <script src="uploud.js"></script>
    </body>
</html>