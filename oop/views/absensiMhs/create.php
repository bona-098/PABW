<?php 
    if (isset($_POST['submit'])) {
        if (!empty($_POST['NIM']) && !empty($_POST['namaMhs'])) {
            $data = [
            "namaMhs" => $_POST['namaMhs'],
            "NIM" => $_POST['NIM'],
            ];
            $c->create($data);
            if (isset($_SESSION['usernamaMhs'])) {
                header("location: index.php?f=absensiMhs");
            }else {
                header("location: index.php?f=login");
            }        
        }
    }
    $m = new Matkuls;
    $u = new Users;
?>
<div class="card">
    <div class="card-header">Buat Absen</div>
    <div class="card-body">
        <div class="container d-flex justify-content-center align-items-center">
        <form action="?f=absensiMhs&&action=create" method="post" class="form-group col-5">
            <div class="form-group">
                <label for="NIM">NIM</label>
                <select name="NIM" class="custom-select">
                    <option selected value="-">-</option>
                <?php
                    foreach ($u->index() as $data_user) {
                        echo '<option value="'.$data_user['id'].'">'. $data_user['username'] .'</option>';
                    }
                ?>
                </select>
            </div>
            <div class="form-group">
                <label for="namaMhs">Nama Mahasiswa</label>
                <input type="text" class="form-control mt-2" name="namaMhs" placeholder="namaMhs">    
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Create</button>
        </form>
    </div>
    </div>

</div>
