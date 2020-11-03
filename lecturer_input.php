<?php  require_once("header.php") ?>
    <h1>Input Data Dosen</h1>
    <form class="form-group" action="lecturer_proses.php" method="post">
    <input type="hidden" name="aksi" value="input">
        <table class="table">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input class="form-control" type="text" name="Nama"></td>
            </tr>
            <tr>
                <td>NIP</td>
                <td>:</td>
                <td><input class="form-control"  type="text" name="NIP"></td>
            </tr>
            <tr>
                <td>Program Studi</td>
                <td>:</td>
                <td>
                    <select class="custom-select" name="Prodi">
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
                    <select class="custom-select" name="Pendidikan">
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea class="form-control" name="Alamat" rows="10"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input class="btn btn-primary"  type="submit" value="Submit">
                    <input class="btn btn-danger"  type="reset" value="Reset"></td>
            </tr>
        </table>
    </form>
    </div>
<?php  require_once("footer.php") ?>