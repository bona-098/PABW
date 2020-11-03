<?php  require_once("header.php") ?>
    <?php 
         $mysqli = new mysqli("localhost", "root", "", "tugas1");
         
         $sql = "SELECT * FROM dosen where id_dosen='" . $_GET['id_dosen'] . "'";
         $result = $mysqli->query($sql);
         $row = $result->fetch_assoc();
         ?>
    <h1>Edit Data Dosen</h1>
    <form action="lecturer_proses.php" method="post">
        <input type="hidden" name="aksi" value="edit">
        <input type="hidden" name="id_dosen" value="<?= $row['id_dosen']; ?>">
        <table class="table">
            <tr>
            </div>
                <td>Nama</td>
                <td>:</td>
                <td><input class="input" type="text" name="Nama" value="<?php echo $row['Nama']; ?>"></td>
            </tr>
            <tr>
                <td>NIP</td>
                <td>:</td>
                <td><input type="text" name="NIP" value="<?php echo $row['NIP']; ?>"></td>
            </tr>
            <tr>
                <td>Program Studi</td>
                <td>:</td>
                <td>
                    <select name="Prodi">
                        <option value="Informatika">Informatika</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Matematika">Matematika</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Pendidikan Terkahir</td>
                <td>:</td>
                <td>
                    
                    <select name="Pendidikan">
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                    </select>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea name="Alamat" cols="30" rows="10"><?php echo $row['Alamat']; ?></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="submit">
                    <input type="reset" value="Reset"></td>
            </tr>
        </table>
    </form>
    </div></div>
<?php  require_once("footer.php") ?>