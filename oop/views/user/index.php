<table class="table table-hover">
    <thead>
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
    </thead>

    <tbody>
        <?php
            print_r($data);
            // foreach ($data as $row) {
            //     echo '
            //     <tr>
            //     <td>'.$row["id"].'</td>
            //     <td>'.$row["username"].'</td>
            //     <td>'.$row["email"].'</td>
            //     <td>
            //         <a href="index.php?f=user&&edit='.$row['id'].'" class="btn btn-sm btn-primary">edit</a>
            //         <a href="index.php?f=user&&delete='.$row['id'].'" class="btn btn-sm btn-danger">delete</a>
            //     </td>
            //     </tr>
            //     ';
            // }
        ?>
    </tbody>
</table>