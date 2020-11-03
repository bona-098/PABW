<?php  require_once("header.php") ?>
    <h1>Input Data matkul</h1>
    <form action="subject_proses.php" method="post">
    <input type="hidden" name="aksi" value="input">
        <table class="table">
            <tr>
                <td>Kode</td>
                <td>:</td>
                <td><input class="form-control" type="text" name="Kode"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input class="form-control" type="text" name="Nama"></td>
            </tr>
            <tr>
                <td>SKS</td>
                <td>:</td>
                <td><input class="form-control" type="text" name="SKS"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input class="btn btn-primary" type="submit" value="Submit">
                    <input class="btn btn-danger" type="reset" value="Reset"></td>
            </tr>
        </table>
    </form></div>
<?php  require_once("footer.php") ?>