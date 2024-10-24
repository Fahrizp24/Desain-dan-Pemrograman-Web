$(document).ready(function() {
    $('#form-delete').submit(function(e) {
        e.preventDefault(); 
        var formData = new FormData(this);
        $.ajax({
            type: 'POST',
            url: '../controller/hapusdata.php',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function(response) {
                $('#status').html(response);
                
            },
            error: function() {
                $('#status').html('Terjadi kesalahan saat menghapus file.');
            }
        });
    });
});