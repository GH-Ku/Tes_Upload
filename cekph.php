<?php

    $konek = mysqli_connect("localhost", "root", "", "webmonitoring");
    $sql = mysqli_query($konek, "SELECT * FROM sensorph ORDER BY id DESC LIMIT 1");
    $sensor = mysqli_fetch_array($sql);
    $kadarph = $sensor["kadar_ph"];

    echo $kadarph ;
?>