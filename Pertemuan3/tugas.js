function check() {
    const nama = document.getElementById("nama").value;
    const alamat = document.getElementById("alamat").value;
    const tgllahir = document.getElementById("tgllahir").value;
    const lakilaki = document.getElementById("lakilaki").checked;
    const perempuan = document.getElementById("perempuan").checked;
    const hobi1 = document.getElementById("hobi1").checked;
    const hobi2 = document.getElementById("hobi2").checked;
    const hobi3 = document.getElementById("hobi3").checked;
    const pekerjaan1 = document.getElementById("pekerjaan1").checked;
    const pekerjaan2 = document.getElementById("pekerjaan2").checked;
    const pekerjaan3 = document.getElementById("pekerjaan3").checked;
    const setuju = document.getElementById("check").checked;

    let yangKosong = [];
    if (!setuju) {
        alert("centang persetujuan")
        return false;
    }
    if (!nama) {
        yangKosong.push("nama");
    } if (!alamat) {
        yangKosong.push("alamat");
    } if (!tgllahir) {
        yangKosong.push("tgllahir");
    } if (!lakilaki && !perempuan) {
        yangKosong.push("jenis kelamin");
    } if (!hobi1 && !hobi2 && !hobi3) {
        yangKosong.push("hobi");
    } if (!pekerjaan1 && !pekerjaan2 && !pekerjaan3) {
        yangKosong.push("pekerjaan");
    }

    if (yangKosong.length > 0) {
        alert("Harap isi " + yangKosong);
    } else {
        alert("data anda berhasil disubmit");
        return true;
    }

}