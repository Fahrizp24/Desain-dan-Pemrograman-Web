<!DOCTYPE html>
<html>
    <head>
        <title>Form input dengan validasi</title>
        <script src="../jquery-3.7.1.js"></script>
    </head>
    <body>
        <h1>Form Input dengan Validasi</h1>
        <form id="myForm" action="proses_validasi.php" method="POST">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama">
            <span id="nama-error" style="color: red;"></span>
            <br>

            <label for="email">Email:</label>
            <input type="text" name="email" id="email">
            <span id="email-error" style="color: red;"></span>
            <br>

            <input type="submit" value="submit">
        </form>

        <script>
            $(document).ready(function () {
                $("#myForm").submit(function (event) {
                    var email = $("#email").val();
                    var nama = $("#nama").val();
                    var valid = true;

                    if (nama === "") {
                        $("#nama-error").text("Nama harus diisi");
                        valid = false;
                    }else{
                        $("#nama-error").text("");
                    }

                    if (email==="") {
                        $("#email-error").text("email harus diisi.");
                        valid = false;
                    }else{
                        $("#email-error").text("");
                    }

                    if (!valid) {
                        (!event.preventDefault());
                    }
                })
            })
        </script>
    </body>
</html>