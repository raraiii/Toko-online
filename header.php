<?php 
session_start();
include 'koneksi/koneksi.php';
if (isset($_SESSION['kd_cs'])) {
    $kode_cs = $_SESSION['kd_cs'];
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RaiiJewelry</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style>
        body {
            font-family: 'Georgia', serif;
        }
        .top {
            background-color: #fff9f0;
            color: #d4af37;
            font-size: 16px;
            padding: 10px 0;
        }
        .navbar-default {
            background-color: #fff;
            border-color: #d4af37;
        }
        .navbar-brand {
            font-size: 24px;
            color: #d4af37 !important;
            font-weight: bold;
        }
        .navbar-nav li a {
            color: #555;
            font-size: 16px;
            transition: 0.3s;
        }
        .navbar-nav li a:hover {
            color: #d4af37;
        }
        .glyphicon-shopping-cart {
            color: #d4af37;
        }
        .dropdown-menu {
            border-color: #d4af37;
        }
        .dropdown-menu li a {
            color: #555;
        }
        .dropdown-menu li a:hover {
            background-color: #d4af37;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row top text-center">
            <div class="col-md-4">
                <span><i class="fas fa-phone-alt"></i> +62 878-0461-6097</span>
            </div>
            <div class="col-md-4">
                <span><i class="fas fa-envelope"></i> RaiiJewelry@gmail.com</span>
            </div>
            <div class="col-md-4">
                <span><b>💎 RaiiJewelry</b></span>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-content" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">RaiiJewelry</a>
            </div>

            <div class="collapse navbar-collapse" id="navbar-content">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="produk.php">Koleksi</a></li>
                    <li><a href="about.php">Tentang Kami</a></li>
                    <li><a href="manual.php">Manual Aplikasi</a></li>
                    <?php 
                    if (isset($_SESSION['kd_cs'])) {
                        $cek = mysqli_query($conn, "SELECT kode_produk FROM keranjang WHERE kode_customer = '$kode_cs'");
                        $value = mysqli_num_rows($cek);
                        ?>
                        <li><a href="keranjang.php"><i class="fas fa-shopping-cart"></i> <b>[ <?= $value ?> ]</b></a></li>
                        <?php 
                    } else {
                        echo "<li><a href='keranjang.php'><i class='fas fa-shopping-cart'></i> [0]</a></li>";
                    }
                    if (!isset($_SESSION['user'])) {
                        ?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i> Akun <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="user_login.php">Login</a></li>
                                <li><a href="register.php">Register</a></li>
                            </ul>
                        </li>
                        <?php 
                    } else {
                        ?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i> <?= $_SESSION['user']; ?> <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="proses/logout.php">Log Out</a></li>
                            </ul>
                        </li>
                        <?php 
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
