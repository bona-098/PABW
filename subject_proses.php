<?php
//Tempat untuk mengeksekusi semua event baik itu input data, edit data dan hapus data.

//membuat objek database mysql dengan format (link_server, username_mysql, password_mysql, database_mysql)
$mysqli = new mysqli("localhost", "root", "", "tugas1");

//setiap request yang datang akan dicek methodnya apakah post atau get. 
//$_POST['aksi'] valuenya diperoleh dari tag <input type="hidden" value=""> karena kl metod post, data yang dikirim dr suatu form, tdk ditampilkan di url/link.
if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['aksi'] == "input") {
    $id_matkul = $_POST["id_matkul"];
    $Nama = $_POST["Nama"];
    $Kode = $_POST["Kode"];
    $SKS = $_POST["SKS"];
	
	//eksekusi query mysql dalam hal ini input data ke tabel
    $query = "INSERT INTO matkul ( Kode, Nama, SKS) VALUES ('$Kode','$Nama', '$SKS')";
    $result = $mysqli->query($query);
} else if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['aksi'] == "edit") {
    $id_matkul = $_POST["id_matkul"];
    $Nama = $_POST["Nama"];
    $Kode = $_POST["Kode"];
    $SKS = $_POST["SKS"];

    $query = "UPDATE matkul SET Kode='$Kode',Nama='$Nama', SKS=' $SKS' WHERE id_matkul='$id_matkul'";
    $result = $mysqli->query($query);
} else if ($_GET['aksi'] == "hapus") {
    $query = "DELETE FROM matkul WHERE id_matkul='" . $_GET['id_matkul'] . "'";

    $result = $mysqli->query($query);
} 
header("Location: index.php?f=subject_index");
$mysqli->close();
