<!DOCTYPE html>
<html>
    <head>  
        <title>Contoh Form dengan PHP</title>
    </head>
    <body>
        <h2>Form Contoh</h2>
        <form action="proses_lanjut.php" method="POST">
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
    </body>
</html>