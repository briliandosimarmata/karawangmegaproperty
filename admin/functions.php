<?php
$conn = mysqli_connect("localhost", "root", "", "karawangmegaproperty");

function addproject($proyek) {
    global $conn;

    $nama_proyek = htmlspecialchars($proyek["nama_proyek"]);
    $pengembang = htmlspecialchars($proyek["pengembang"]);
    $deskripsi = htmlspecialchars($proyek["deskripsi"]);
    $deskripsi_harga = htmlspecialchars($proyek["deskripsi_harga"]);
    $deskripsi_lokasi = htmlspecialchars($proyek["deskripsi_lokasi"]);
    $siteplan = htmlspecialchars($proyek["siteplan"]);
    $whatsapp = htmlspecialchars($proyek["whatsapp"]);
    $gmap = htmlspecialchars($proyek["gmap"]);

    $insert = "INSERT INTO proyek VALUES ('','$nama_proyek','$pengembang','$deskripsi','$deskripsi_harga','$deskripsi_lokasi','$siteplan','$whatsapp','$gmap')";

    mysqli_query($conn, $insert);

    return mysqli_affected_rows($conn);
}
?>