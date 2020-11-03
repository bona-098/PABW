<?php
//Tempat untuk mengeksekusi semua event baik itu input data, edit data dan hapus data.

//membuat objek database mysql dengan format (link_server, username_mysql, password_mysql, database_mysql)
$mysqli = new mysqli("localhost", "root", "", "tugas1");

//setiap request yang datang akan dicek methodnya apakah post atau get. 
//$_POST['aksi'] valuenya diperoleh dari tag <input type="hidden" value=""> karena kl metod post, data yang dikirim dr suatu form, tdk ditampilkan di url/link.
if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['aksi'] == "input") {
    $NIM = $_POST["NIM"];
    $Nama = $_POST["Nama"];
    $Prodi = $_POST["Prodi"];
	
	//eksekusi query mysql dalam hal ini input data ke tabel
    $query = "INSERT INTO mahasiswa (NIM, Nama, Prodi) VALUES ('$NIM', '$Nama', '$Prodi')";
    $result = $mysqli->query($query);
} else if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['aksi'] == "edit") {
    $id_mahasiswa = $_POST["id_mahasiswa"];
    $NIM = $_POST["NIM"];
    $Nama = $_POST["Nama"];
    $Prodi = $_POST["Prodi"];

    $query = "UPDATE mahasiswa SET NIM='$NIM', Nama='$Nama', Prodi=' $Prodi' WHERE id_mahasiswa='$id_mahasiswa'";
    $result = $mysqli->query($query);
} else if ($_GET['aksi'] == "hapus") {
    $query = "DELETE FROM mahasiswa WHERE id_mahasiswa='" . $_GET['id_mahasiswa'] . "'";

    $result = $mysqli->query($query);
} 
header("Location: index.php?f=student_index");
$mysqli->close();
