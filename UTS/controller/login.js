$(document).ready(function() {
  
    $('#login-form').submit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);

        $.ajax({
            type: 'POST',
            url: "../controller/proseslogin.php",
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                if (response.trim() === "berhasil") {
                    window.location.href = 'daftarprestasi.php'; // Redirect jika login berhasil
                } else {
                    $("#status").html("username atau Password tidak sesuai"); // Menampilkan pesan kesalahan langsung dari respons PHP
                }
            },
            error: function() {
                $('#status').html('Username atau Password tidak sesuai.');
            }
        });
    });
});
