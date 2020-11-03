<?php  require_once("header.php") ?>
    <div class="container">
    <h1>Data Dosen</h1>
    <a class="btn btn-success" href="?f=lecturer_input">Input Data Dosen</a>
    <br>
    <br>

    <?php
	// Cek sudah login atau belum, kalau belum akan diredirect ke page logi. Penjelasan kode ini ada di file index.php
    if (isset($_SESSION["username"])) {
        //membuat objek mysql
        $mysqli = new mysqli("localhost", "root", "", "tugas1");        
        //mengecek apakah sudah terkoneksi ke database mysql atau belum
        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }
        
		//menjalankan query mysql
        $sql = "SELECT * FROM dosen";
        $result = $mysqli->query($sql);
        echo "<table class='table'>  
        <thead>
        <tr>
        <th scope='col'>NIP</th>
        <th scope='col'>NAMA</th>
        <th scope='col'>PRODI</th>
        <th scope='col'>PENDIDIKAN</th>
        <th scope='col'>ALAMAT</th>
        <th scope='col'>AKSI</th>
        </tr>
        </thead>";
		//mengecek apakah tabel ada datanya atau tidak dengan kode num_rows
        if ($result->num_rows > 0) {
            // menampilkan hasil query data berdasarkan baris. NIP, Nama, Prodi dll merujuk ke Nama kolom karena kita pakai method fetch_assoc
            while ($row = $result->fetch_assoc()) {
                echo " <tbody>
                <tr>
                <td>" . $row["NIP"] . "</td>
                <td>" . $row["Nama"] . "</td>
                <td>" . $row["Prodi"] . "</td>
                <td>" . $row["Pendidikan"] . "</td>
                <td>" . $row["Alamat"] . "</td>
                <td>
                <a class='btn btn-primary mr-2' href='?f=lecturer_edit&&id_dosen=" . $row["id_dosen"] . "'>Edit</a>
                <a class='btn-danger btn' href='lecturer_proses.php?aksi=hapus&&id_dosen=" . $row["id_dosen"] . "'>Hapus</a>
                </tr>
                </tbody>";
                
            }
        } else {
            echo "0 results";
        }
        echo "</table>";
        $mysqli->close();
    }else{
        header("Location: login.php");
    }
    ?>
    </div></div>
<?php  require_once("footer.php") ?>
