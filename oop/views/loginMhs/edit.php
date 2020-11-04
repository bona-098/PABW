<?php
    if (isset($_POST['submit'])) {
        if (!empty($_POST['NIM']) && !empty($_POST['password'])) {
            $data = [
                "NIM" => $_POST['NIM'],
                "password" => $_POST['password'],
                ];
            $by = ["id",$_POST['id']];
            $m->update($data,$by);
        }
    }
    $rules = ["id",$param];
    foreach ($m->edit($rules) as $data) :
?>
<div class="container">
    <div class="card">
        <div class="card-header">Edit User</div>
        <div class="card-body">
            <form action="?f=matkul&&action=edit&&param=<?php echo $param; ?>" method="post" class="form-group">
                <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                <div class="form-group">
                    <label for="NIM">NIM</label>
                    <input type="text" class="form-control mt-2" name="NIM" value=<?php echo $data["NIM"] ?>>
                </div>
                <div class="form-group">
                    <label for="name">Password</label>
                    <input type="text" class="form-control mt-2" name="password" value=<?php echo $data["password"] ?>>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
    

<?php endforeach; ?>