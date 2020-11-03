<?php
//Tempat untuk mengeksekusi semua event baik itu input data, edit data dan hapus data.

//membuat objek database mysql dengan format (link_server, username_mysql, password_mysql, database_mysql)
$mysqli = new mysqli("localhost", "root", "", "tugas1");

//setiap request yang datang akan dicek methodnya apakah post atau get. 
//$_POST['aksi'] valuenya diperoleh dari tag <input type="hidden" value=""> karena kl metod post, data yang dikirim dr suatu form, tdk ditampilkan di url/link.
if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['aksi'] == "input") {
    $NIP = $_POST["NIP"];
    $Nama = $_POST["Nama"];
    $Prodi = $_POST["Prodi"];
    $Pendidikan = $_POST["Pendidikan"];
    $Alamat = $_POST["Alamat"];
	
	//eksekusi query mysql dalam hal ini input data ke tabel
    $query = "INSERT INTO dosen (NIP, Nama, Prodi, Pendidikan, Alamat) VALUES ('$NIP', '$Nama', '$Prodi', '$Pendidikan', '$Alamat')";
    $result = $mysqli->query($query);

} else if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['aksi'] == "edit") {
    $id_dosen = $_POST["id_dosen"];
    $NIP = $_POST["NIP"];
    $Nama = $_POST["Nama"];
    $Prodi = $_POST["Prodi"];
    $Pendidikan = $_POST["Pendidikan"];
    $Alamat = $_POST["Alamat"];

    $query = "UPDATE dosen SET NIP='$NIP', Nama='$Nama', Prodi='$Prodi', Pendidikan='$Pendidikan', Alamat='$Alamat' WHERE id_dosen='$id_dosen'";
    $result = $mysqli->query($query);
    
} else if ($_GET['aksi'] == "hapus") {
    $query = "DELETE FROM dosen WHERE id_dosen='" . $_GET['id_dosen'] . "'";

    $result = $mysqli->query($query);
} 
header("Location: index.php?f=lecturer_index");
$mysqli->close();
