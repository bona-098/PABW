<?php
    if (isset($_POST['submit'])) {
        if (!empty($_POST['NIM']) && !empty($_POST['namaMhs']) ) {
            $data = [
                "namaMhs" => $_POST['namaMhs'],
                "NIM" => $_POST['NIM'],
                ];
            $by = ["id",$_POST['id']];
            $c->update($data,$by);
        }
    }
    $m = new Matkuls;
    $u = new Users;
    $rules = ["id",$param];
    foreach ($c->edit($rules) as $data) :
?>
<div class="card">
    <div class="card-header">Edit Course</div>
    <div class="card-body">
        <div class="container d-flex justify-content-center align-items-center">
        <form action="?f=course&&action=edit&&param=<?php echo $param; ?>" method="post" class="form-group col-5">
            <input type="hidden" namaMhs="id" value="<?echo $data['id'] ?>">
            <div class="form-group">
                <label for="NIM">NIM</label>
                <select namaMhs="NIM" class="custom-select">
                    <option selected value="-">-</option>
                <?php
                    foreach ($u->index() as $data_user) {
                        if ($data_user['id'] == $data['NIM'] ) {
                            echo '<option selected value="'.$data_user['id'].'">'. $data_user['username'] .'</option>';
                        } else {
                            echo '<option value="'.$data_user['id'].'">'. $data_user['username'] .'</option>';
                        }
                        
                    }
                ?>
                </select>
            </div>
            <div class="form-group">
                <label for="namaMhs">namaMhs</label>
                <input type="text" class="form-control mt-2" namaMhs="namaMhs" placeholder="namaMhs" value="<?php echo $data['namaMhs'] ?>">    
            </div>
            <button type="submit" class="btn btn-primary" namaMhs="submit">Update</button>
        </form>
    </div>
    </div>

</div>

    

<?php endforeach; ?>