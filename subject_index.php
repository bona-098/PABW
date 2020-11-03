<?php  require_once("header.php") ?>
    <div class="container">
        <h1>Data Mata Kuliah</h1>
        <a class="btn btn-success" href="?f=subject_input">Input Data Mata Kuliah</a>
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
            $sql = "SELECT * FROM matkul";
            $result = $mysqli->query($sql);
            echo "<table class='table'>  
            <thead>
            <tr>
            <th scope='col'>NAMA</th>
            <th scope='col'>SKS</th>
            <th scope='col'>KODE</th>
            <th scope='col'>AKSI</th>
            </tr>
            </thead>";
            //mengecek apakah tabel ada datanya atau tidak dengan kode num_rows
            if ($result->num_rows > 0) {
                // menampilkan hasil query data berdasarkan baris. nim, nama, prodi dll merujuk ke nama kolom karena kita pakai method fetch_assoc
                while ($row = $result->fetch_assoc()) {
                    echo " <tbody>
                    <tr>
                    <td>" . $row["Nama"] . "</td>
                    <td>" . $row["SKS"] . "</td>
                    <td>" . $row["Kode"] . "</td>
                    <td><div class='col'>

                    <a class='btn btn-primary mr-2' href='?f=subject_edit&&id_matkul=" . $row["id_matkul"] . "'>Edit</a>

                    <a class='btn-danger btn' href='subject_proses.php?aksi=hapus&&id_matkul=" . $row["id_matkul"] . "'>Hapus</a></div>

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
    </div>
</div>
<?php  require_once("footer.php") ?>
