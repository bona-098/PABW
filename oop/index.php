<?php

include "autoloader.php";
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 flex-col justify-content-center align-items-center card position-fixed" style="top: 0; left:0; z-index:99; height:100vh;">
                <img src="https://www.atomix.com.au/media/2015/06/atomix_user31.png" class="image-rounded" style="width:50%;">
                <h1>sidenav</h1>
                <a href="?f=user" class="nav-link">User</a>
                <a href="?f=departement" class="nav-link">Departement</a>
                <a href="?f=prodi" class="nav-link">Prodi</a>
                <a href="?f=matkul" class="nav-link">Matkul</a>
                <a href="?f=absensimhs" class="nav-link">absensiMhs</a>
                <a href="?f=course_member" class="nav-link">Course Member</a>
                <?php
                    $islogin = (isset($_SESSION['username'])) ? "logout" : "login" ;
                    echo '<a href="?f='.$islogin.'" class="nav-link">'.$islogin.'</a>'
                ?>
            </div>
            <div class="col-10 offset-2">

                <?php
                /*
                    @$url = $_GET['f'];
                    @$action = $_GET['action'];
                    @$param = $_GET['param'];
                    
                    switch ($url) {
                        // user view
                        case 'user':
                            $u = new Users;
                            if ($action == "edit" && isset($param)) {
                                require_once "views/user/edit.php";
                            } elseif ($action == "delete" && isset($param)) {
                                require_once "views/user/delete.php";
                            } else {
                                require_once "views/user/index.php";
                            }
                            break;
                        case 'register':
                            require_once "views/user/create.php";
                            break;
                        case 'login':
                            require_once "views/user/login.php";
                            break;
                        case 'logout':
                            require_once "views/user/logout.php";
                            break;
                        // departement
                        case 'departement':
                            $d = new Departements;
                            if ($action == "edit" && isset($param)) {
                                require_once "views/departement/edit.php";
                            } elseif ($action == "delete" && $param) {
                                require_once "views/departement/delete.php";
                            } elseif ($action == "create") {
                                require_once "views/departement/create.php";
                            } else {
                                require_once "views/departement/index.php";
                            }
                            break;
                        // prodi
                        case 'prodi':
                            $p = new Prodies;
                            if ($action == "edit" && isset($param)) {
                                require_once "views/prodi/edit.php";
                            } elseif ($action == "delete" && $param) {
                                require_once "views/prodi/delete.php";
                            } elseif ($action == "create") {
                                require_once "views/prodi/create.php";
                            } else {
                                require_once "views/prodi/index.php";
                            }
                            break;
                        // matkul
                        case 'matkul':
                            $m = new Matkuls;
                            if ($action == "edit" && isset($param)) {
                                require_once "views/matkul/edit.php";
                            } elseif ($action == "delete" && $param) {
                                require_once "views/matkul/delete.php";
                            } elseif ($action == "create") {
                                require_once "views/matkul/create.php";
                            } else {
                                require_once "views/matkul/index.php";
                            }
                            break;
                        // course
                        case 'course':
                            $c = new Courses;
                            if ($action == "edit" && isset($param)) {
                                require_once "views/course/edit.php";
                            } elseif ($action == "delete" && $param) {
                                require_once "views/course/delete.php";
                            } elseif ($action == "create") {
                                require_once "views/course/create.php";
                            } else {
                                require_once "views/course/index.php";
                            }
                            break;
                         // course_member
                         case 'course_member':
                            $cm = new Courses_Member;
                            if ($action == "edit" && isset($param)) {
                                require_once "views/course_member/edit.php";
                            } elseif ($action == "delete" && $param) {
                                require_once "views/course_member/delete.php";
                            } elseif ($action == "join") {
                                require_once "views/course_member/create.php";
                            } else {
                                require_once "views/course_member/index.php";
                            }
                            break;
                        // index.php default
                        default:
                            require_once "views/index.php";
                            break;
                    }
                */
                ?>
            </div>
        </div>
    </div>

</body>
</html>