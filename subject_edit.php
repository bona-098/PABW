<?php  require_once("header.php") ?>
    <?php 
         $mysqli = new mysqli("localhost", "root", "", "tugas1");
         
         $sql = "SELECT * FROM matkul where id_matkul='".$_GET['id_matkul']."'";
         $result = $mysqli->query($sql);
         $row = $result->fetch_assoc()
         ?>
    <h1>Edit Data Matkul</h1>
    .
    <form action="subject_proses.php" method="post" class="form-group">
        <input type="hidden" name="aksi" value="edit">
        <input type="hidden" name="id_matkul" value="<?= $row['id_matkul']; ?>">
        <table>
            </tr>
                <td>Kode</td>
                <td>:</td>
                <td><input class="form-control" type="text" name="Kode"  value="<?php echo $row['Kode']; ?>"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input class="form-control" type="text" name="Nama" value="<?php echo $row['Nama']; ?>"></td>
            </tr>
                <td>SKS</td>
                <td>:</td>
                <td><input class="form-control" type="text" name="SKS"  value="<?php echo $row['SKS']; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input class="btn btn-primary" type="submit" value="Submit">
                    <input class="btn btn-danger" type="reset" value="Reset"></td>
            </tr>
        </table>
    </form>
    </div>
<?php  require_once("footer.php") ?>