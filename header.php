<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>iniGerbang</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	  <meta name="keywords" content="footer, address, phone, icons" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

</head>

<body>
<ul class="nav d-flex justify-content-center align-items-center py-2">
  <a href="index.php" class="nav-item"><img class="" src="https://itk.ac.id/wp-content/uploads/2016/01/Logo-Web-ITK.png"></a>
  <li class="nav-item">
    <a class="nav-link" href="?f=lecturer_index">Dosen</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="?f=student_index">Mahasiswa</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="?f=subject_index">Mata Kuliah</a>
  </li>
  

        <?php
	//memulai session
	session_start();
	//isset akan mengecek apakah variabel ada isinya atau tidak 
	//dalam hal ini variabel $_SESSION["username"] diinisiasi/diisikan value-nya waktu proses login
	//sehingga dipakai untuk mengecek apakah sudah login atau belum.
	//kl variabel $_SESSION["username"] kosong berarti belum login sehingga tdk akan ditampilkan link logout
	
	if (isset($_SESSION["username"])) {
    echo "
      <li class='nav-item'>
      <a class='nav-link btn btn-danger' href='?f=logout'>Logout</a>
      </li>
    ";
	}else {
    echo '
    <li class="nav-item">
    <a class="nav-link " href="login.php">Login</a>
    </li>
    ';
  }
  ?>
  </ul>
      <!-- </li>
    </ul>
  </div>
</nav> -->
<!-- <div class="container wrapper"> -->
