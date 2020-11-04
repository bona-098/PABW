<?php
    if (isset($_POST['submit'])) {
        if (!empty($_POST['query'])) {
            $data = [
                'query' => $_POST['query'],
            ];
            $by = ["id",$_POST['id']];
            $d->update($data,$by);
            // print_r($d->upadate());
        }
    }
    foreach ($d->edit(["id",$param]) as $data) :
?>
<div class="container">
    <div class="card">
        <div class="card-header">Edit User</div>
        <div class="card-body">
            <form action="?f=departement&&action=edit&&param=<?php echo $param; ?>" method="post" class="form-group">
                <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                <div class="form-group">
                    <label for="query">query</label>
                    <input type="text" class="form-control" name='query' value="<?php echo $data['query']  ?>">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
    

<?php endforeach; ?>