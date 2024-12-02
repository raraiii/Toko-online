<?php 
session_start();
include '../koneksi/koneksi.php';
if(!isset($_SESSION['admin'])){
	header('location:index.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>RaiiShop Admin</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/bootstrap-theme.css">
	<script src="../js/jquery.js"></script>
	<script src="../js/bootstrap.min.js"></script>

	<style>
		/* Navbar Styling */
		.navbar {
			background-color: #ff8680;
			border-radius: 0;
			padding: 10px 15px;
		}

		.navbar .navbar-header button {
			border: none;
			background: transparent;
		}

		.navbar a {
			color: white !important;
			font-size: 16px;
			font-weight: bold;
		}

		.navbar a:hover {
			color: #ff6666 !important;
		}

		.navbar .navbar-nav > li > a {
			padding: 10px 20px;
		}

		.navbar .navbar-nav > .active > a {
			background-color: #ff6666;
			color: white !important;
		}

		.navbar .dropdown-menu {
			background-color: #ffb6c1;
		}

		.navbar .dropdown-menu a {
			color: #333;
			font-weight: normal;
		}

		.navbar .dropdown-menu a:hover {
			background-color: #ff6666;
			color: white;
		}

		.navbar .navbar-right {
			display: flex;
			align-items: center;
		}

		.navbar .navbar-right .dropdown-toggle::after {
			content: none;
		}

		.navbar .dropdown-menu > li > a {
			padding: 10px 20px;
		}

		.navbar-toggle {
			border-color: #ff8680;
		}

		.navbar-toggle .icon-bar {
			background-color: white;
		}

		/* Customizing the navbar items */
		.navbar .navbar-left {
			flex: 1;
		}

		.navbar .navbar-right {
			flex: 1;
			justify-content: flex-end;
		}
	</style>
</head>
<body>

	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-left">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-folder-close"></i> Data Master <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="m_produk.php">Lihat Produk</a></li>
							<li><a href="m_customer.php">Lihat Customer</a></li>
						</ul>
					</li>

					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-retweet"></i> Data Transaksi <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="produksi.php">Produksi</a></li>
							<li><a href="inventory.php">Inventory</a></li>
						</ul>
					</li>

					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-stats"></i> Laporan <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="laporan_penjualan.php">Laporan Penjualan</a></li>
							<li><a href="laporan_profit.php">Laporan Profit</a></li>
							<li><a href="laporan_omset.php">Laporan Omset</a></li>
							<li><a href="laporan_pembatalan.php">Laporan Pembatalan</a></li>
							<li><a href="laporan_inventory.php">Laporan Inventory</a></li>
							<li><a href="laporan_produksi.php">Laporan Produksi</a></li>
						</ul>
					</li>

					<li><a href="halaman_utama.php">Dashboard</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-cog"></i> Pemeliharaan <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="../DATABASE/backup.php">Backup Database</a></li>
							<li><a href="../DATABASE/retrieve.php">Retrieve Database</a></li>
						</ul>
					</li>

					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-user"></i> Admin <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="proses/logout.php">Log Out</a></li>
						</ul>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>

</body>
</html>
