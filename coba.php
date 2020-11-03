<?php
    $mysqli = new mysqli("localhost", "root", "", "tugas1");        
    $sql = "SELECT * FROM `ambil` JOIN `mahasiswa` ON `ambil`.`id_mahasiswa` = `mahasiswa`.`id_mahasiswa` JOIN `matkul` ON `ambil`.`id_matkul` = `matkul`.`id_matkul` ";
    $result = $mysqli->query($sql);
    while ($row = $result->fetch_assoc()) {
        # print_r($row); #print all data by array
        echo $row['nama'],$row['id_mahasiswa'];

    }
?>