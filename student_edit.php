<?php  require_once("header.php") ?>
    <?php 
         $mysqli = new mysqli("localhost", "root", "", "tugas1");
         
         $sql = "SELECT * FROM mahasiswa where NIM='".$_GET['NIM']."'";
         $result = $mysqli->query($sql);
         $row = $result->fetch_assoc()
         ?>
    <h1>Edit Data mahasiswa</h1>
    <form action="student_proses.php" method="post">
        <input type="hidden" name="aksi" value="edit">
        <input type="hidden" name="id_mahasiswa" value="<?= $row['id_mahasiswa']; ?>">
        <table class="table">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input class="input" type="text" name="Nama" value="<?php echo $row['Nama']; ?>"></td>
            </tr>
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td><input class="input" type="text" name="NIM"  value="<?php echo $row['NIM']; ?>"></td>
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
                <td></td>
                <td></td>
                <td><input type="submit" value="Submit">
                    <input type="reset" value="Reset"></td>
            </tr>
        </table>
    </form>
    </div></div>
<?php  require_once("footer.php") ?>