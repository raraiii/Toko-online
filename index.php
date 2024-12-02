<?php 
include 'header.php';
?>

<!-- IMAGE -->
<div class="container-fluid p-0">
    <div class="image position-relative" style="margin-top: -21px;">
        <img src="image/home/rai.jpg" style="width: 100%; height: 650px; object-fit: cover;">
        <div class="overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center">
            <h1 class="text-white fw-bold" style="text-shadow: 2px 2px 5px rgba(0,0,0,0.7); font-family: 'Comic Sans MS', cursive;">Welcome to RaiiShop Cake & Bakery</h1>
        </div>
    </div>
</div>
<br>

<!-- PRODUK TERBARU -->
<div class="container">
    <h4 class="text-center bg-light py-3 rounded-pill shadow-sm" style="font-family: 'Comic Sans MS', cursive; font-style: italic; line-height: 29px; border: 2px dashed #ff8d87;">
        RaiiShop Cake & Bakery adalah salah satu pelopor pertama dalam bisnis roti modern di Indonesia. Produk kami sehat, bergizi, dan terjangkau oleh semua orang.
    </h4>

    <h2 class="text-center mt-5 mb-4" style="font-family: 'Comic Sans MS', cursive; color: #ff8680;"><b>Produk Kami</b></h2>

    <div class="row">
        <?php 
        $result = mysqli_query($conn, "SELECT * FROM produk");
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <div class="col-sm-6 col-md-4 mb-4">
                <div class="card border-0 shadow-sm rounded-lg" style="overflow: hidden;">
                    <!-- Bingkai untuk gambar produk -->
                    <div class="frame" style="position: relative; padding: 15px; background: #ffe4e1; border-radius: 20px; box-shadow: 0 4px 10px rgba(0,0,0,0.1);">
                        <img src="image/produk/<?= $row['image']; ?>" class="card-img-top img-fluid rounded" style="border: 5px solid #ffb6c1; border-radius: 20px; height: 250px; object-fit: cover;">
                        <div class="ribbon bg-warning text-white position-absolute top-0 end-0 px-3 py-1 rounded-start" style="font-family: 'Comic Sans MS', cursive;">New</div>
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title" style="font-family: 'Comic Sans MS', cursive;"><?= $row['nama']; ?></h5>
                        <h4 class="text-success fw-bold">Rp.<?= number_format($row['harga']); ?></h4>
                        <div class="d-flex justify-content-center mt-3">
                            <a href="detail_produk.php?produk=<?= $row['kode_produk']; ?>" class="btn btn-warning me-2" style="border-radius: 20px;">Detail</a>
                            <?php if (isset($_SESSION['kd_cs'])) { ?>
                                <a href="proses/add.php?produk=<?= $row['kode_produk']; ?>&kd_cs=<?= $kode_cs; ?>&hal=1" class="btn btn-success" style="border-radius: 20px;"><i class="fas fa-shopping-cart"></i> Tambah</a>
                            <?php } else { ?>
                                <a href="keranjang.php" class="btn btn-success" style="border-radius: 20px;"><i class="fas fa-shopping-cart"></i> Tambah</a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php 
        }
        ?>
    </div>
</div>

<?php 
include 'footer.php';
?>
