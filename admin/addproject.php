<?php
require 'functions.php';

if (isset ($_POST["submit"])) {

    if (addproject($_POST) > 0) {
        echo "Data berhasil ditambahkan!";
    } else {
        echo "Data tidak berhasil ditambahkan!";
        echo "<br>";
        echo "Kesalahan: ", mysqli_error($conn);
    }
    # code...
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tambah data proyek</h1>

    <form action="" method="post">
        <label for="nama_proyek">Nama Proyek: </label>
        <input type="text" name="nama_proyek" id="nama_proyek" required>
        <br>
        <label for="pengembang">Pengembang: </label>
        <input type="text" name="pengembang" id="pengembang" required>
        <br>
        <label for="deskripsi">Deskripsi: </label>
        <input type="text" name="deskripsi" id="deskripsi" required>
        <br>
        <label for="deskripsi_harga">Deskripsi Harga: </label>
        <input type="text" name="deskripsi_harga" id="deskripsi_harga" required>
        <br>
        <label for="deskripsi_lokasi">Deskripsi Lokasi: </label>
        <input type="text" name="deskripsi_lokasi" id="deskripsi_lokasi" required>
        <br>
        <label for="siteplan">Siteplan: </label>
        <input type="text" name="siteplan" id="siteplan" required>
        <br>
        <label for="whatsapp">Whatsapp: </label>
        <input type="text" name="whatsapp" id="whatsapp" required>
        <br>
        <label for="gmap">Google Map: </label>
        <input type="text" name="gmap" id="gmap" required>
        <br>
        <br>
        <button type="submit" name="submit">Tambah Data</button>
    </form>
    

</body>
</html>