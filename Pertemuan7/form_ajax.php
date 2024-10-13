<!DOCTYPE html>
<html>
    <head>  
        <title>Contoh Form dengan PHP dan Jquery</title>
        <script src="../jquery-3.7.1.js"></script>
    </head>
    <body>
        <h2>Form Contoh</h2>
        <form id="myForm">
            <label for="buah"> Pilih Buah: </label>
            <select name="buah" id="buah">
                <option value="apel">apel</option>
                <option value="pisang">pisang</option>
                <option value="mangga">mangga</option>
                <option value="Jeruk">Jeruk</option>
            </select>
            
            <br>
            
            <label for="warna">Pilih warna favorit</label>
            <input type="checkbox"  name="warna[]" value="merah">Merah <br>
            <input type="checkbox"  name="warna[]" value="biru">Biru <br>
            <input type="checkbox"  name="warna[]" value="hijau">Hijau <br>

            <br>

            <label for="jeniskelamin" >Pilih Jenis Kelamin</label>
            <input type="radio" name="jenis_kelamin" value="laki-laki">Laki Laki <br>
            <input type="radio" name="jenis_kelamin" value="perempuan">Perempuan <br>

            <br>

            <input type="submit" name="submit" value="submit">
        </form>

        <div id="hasil">
            <!-- Hasil disini -->
        </div>

        <script>
            $(document).ready(function () {
                $("#myForm").submit(function (e) {
                    e.preventDefault();

                    //mengumpulkan data form
                    var formData = $("#myForm").serialize();

                    //kirim data ke server php
                    $.ajax({
                        url:"proses_lanjut.php",
                        type:"POST",
                        data: formData,
                        success: function (response){
                            $("#hasil").html(response);
                        }
                    })
                })
            })
        </script>
    </body>
</html>