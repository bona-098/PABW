<?php  require_once("header.php") ?>
    <h1>Input Data mahasiswa</h1>
    <form action="student_proses.php" method="post">
    <input type="hidden" name="aksi" value="input">
        <table class="table">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input class="form-control" type="text" name="Nama"></td>
            </tr>
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td><input class="form-control" type="text" name="NIM"></td>
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
                <td></td>
                <td></td>
                <td><input class="btn btn-primary" type="submit" value="Submit">
                    <input class="btn btn-primary" type="reset" value="Reset"></td>
            </tr>
        </table>
    </form></div>
<?php  require_once("footer.php") ?>