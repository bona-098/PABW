<?php 
    if (isset($_POST['submit'])) {
        if (!empty($_POST['NIM']) && !empty($_POST['Password'])) {
            $data = [
            "NIM" => $_POST['NIM'],
            "Password" => $_POST['Password'],
            ];
            $m = new Matkuls;
            $m->create($data);
            if (isset($_SESSION['username'])) {
                header("location: index.php?f=matkul");
            }else {
                header("location: index.php?f=login");
            }        
        }
    }
?>
<div class="container d-flex justify-content-center align-items-center">
<form action="?f=matkul&&action=create" method="post" class="form-group col-5">
    <div class="form-group">
        <label for="NIM">NIM</label>
        <input type="text" class="form-control mt-2" name="NIM" placeholder="NIM">    
    </div>
    <div class="form-group">
        <label for="Password">Password</label>
        <input type="text" class="form-control mt-2" name="Password" placeholder="Password">    
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Create</button>
</form>
</div>
