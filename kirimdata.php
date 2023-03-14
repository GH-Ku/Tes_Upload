<?php
    $konek = mysqli_connect("localhost", "root", "", "webmonitoring");

    date_default_timezone_set('Asia/Jakarta');
    $tanggal = date("d-m-Y");
    $waktu = date("H:i:s");
    $kadar_ph = $_GET['kadar_ph'];
    $status_air = $_GET['status_air'];

    $kirim = mysqli_query($konek, "INSERT INTO 
    sensorph (tanggal,waktu,kadar_ph,status_air) 
    VALUES ('$tanggal','$waktu','$kadar_ph','$status_air')");

    if ($kirim) {
        echo "Berhasil Input Data...!";
    } else {
        echo "Gagal Input Data...!";
    }

?>