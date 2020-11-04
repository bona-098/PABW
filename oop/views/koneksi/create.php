<?php 
    if (isset($_POST['submit'])) {
        if (!empty($_POST['query'])) {
            $data = [
            "query" => $_POST['query'],
            ];
            $d = new koneksi;
            $d->create($data);
            if (isset($_SESSION['username'])) {
                header("location: index.php?f=koneksi");
            }else {
                header("location: index.php?f=login");
            }        
        }
    }
?>
<div class="container d-flex justify-content-center align-items-center">
<form action="?f=koneksi&&action=create" method="post" class="form-group col-5">
    <input type="text" class="form-control mt-2" name='query' placeholder="query">
    <button type="submit" class="btn btn-primary" name="submit">Create</button>
</form>
</div>
