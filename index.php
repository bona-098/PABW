<?php  require_once("header.php") ?>
	
	<?php
	//mekanisme/trik untuk menjalankan file php dari url/link tampa ekstensi php dengan menggunakan get
	//trik seperti ini akan sering digunakan pada framework laravel untuk membedakan halaman utama (home page) dengan page yang lain.
	//pertama akan mengecek apakah variabel $_GET['f'] ada value-nya atau tidak. value get berupa 
	//kl ada, akan digunakan untuk memanggil file sesuai dengan value yang diperoleh dari $_GET dengan code include_once
	if (isset($_GET['f'])) {
		$file = $_GET['f'];
		if (file_exists("$file.php")) {
			include_once "$file.php";
		} else {
			echo 'File Tidak ada</b>';
		}
	} else {
        ?>
        <div class='jumbotron bg-primary text-light text-center mb-0'> 
            <h1>Welcome to ITK Database system</h1>
        </div>
		<!-- <div class="container-fluid"> -->
            <div class="row row-header">
                <div class="col">
                    <div id="mycarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img class="d-block img-fluid" style="height:500px; width: 100%"
                                     src="img/1.png" alt="1">
                            </div>
                            <div class="carousel-item item">
                                <img class="d-block img-fluid" style="height:500px; width: 100%"
                                     src="img/2.png" alt="2">
                            </div>
                            <div class="carousel-item item">
                                <img class="d-block img-fluid" style="height:500px; width: 100%"
                                     src="img/3.png" alt="3">
                            </div>
                        </div>
                        <ol class=" carousel-indicators">
                            <li data-terget="#mycarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#mycarousel" data-slide-to="1"></li>
                            <li data-target="#mycarousel" data-slide-to="2"></li>
                        </ol>
                        <a class="carousel-control-prev" href="#mycarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#mycarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                        <button class="btn btn-danger btn-sm" id="carouselButton">
                            <span class="fa fa-pause"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
		
		<div class='container mid-section'>
			<div class='row'>
				<div class='col text-center'>
                    <ul class='navbar nav '>
                        <li class='nav-item btn-1'>
                            <a class='nav-link btn btn-success' href='?f=lecturer_index''>Data Dosen</a>
                        </li>
                        <li class='nav-item btn-1'>
                            <a class='nav-link btn-warning btn' href='?f=student_index'>Data Mahasiswa</a>
                        </li>
                        <li class='nav-item btn-1'>
                            <a class='nav-link btn btn-primary' href='?f=subject_index'>Data Matakuliah</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    <?php
	}
	?>

<?php  require_once("footer.php") ?>