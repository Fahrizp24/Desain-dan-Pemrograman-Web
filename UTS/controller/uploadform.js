$(document).ready(function() {
    $('.form-isi-prestasi').submit(function(e) {
        e.preventDefault();  
        var formData = new FormData(this);
        
        $.ajax({
            type: 'POST',
            url: '../controller/prosesupload.php',
            data: formData,
            contentType: false, 
            processData: false, 
            success: function(response) {
                if (response.trim() == "Berhasil") {
                    $('#status').html("Data Berhasil di inputkan"); 
                }else if (response.trim() == "DosendanMahasiswa") {
                    $('#status').html("Dosen dan Mahasiswa tidak ditemukan"); 
                } else if (response.trim() == "Mahasiswa") {
                    $("#status").html("Mahasiswa tidak ditemukan");
                } else if (response.trim() == "Dosen") {
                    $("#status").html("Dosen tidak ditemukan"); 
                }
            },
            error: function(xhr, status, error) {
                console.log(xhr.responseText);
                $('#status').html('Terjadi kesalahan saat mengirim file.');
            }
        });
    });
});
