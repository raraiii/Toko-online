<?php 
include 'header.php';
?>

<style type="text/css">
    .bs-acc {
        margin: 20px;
    }

    .panel-default {
        border-radius: 10px;
        overflow: hidden;
        background-color: #fff;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    .panel-heading {
        background-color: #ff8680;
        color: white;
        padding: 15px;
        font-family: 'Arial', sans-serif;
        font-size: 18px;
    }

    .panel-title {
        margin: 0;
        display: flex;
        justify-content: space-between;
    }

    .panel-title::after {
        content: '💍'; /* Ikon cincin */
        font-size: 20px;
    }

    .panel-collapse {
        background-color: #f9f9f9;
        border-top: 1px solid #ff8680;
    }

    .panel-body {
        padding: 20px;
        font-family: 'Arial', sans-serif;
        font-size: 16px;
        color: #333;
    }

    ol li {
        margin-bottom: 10px;
    }
</style>

<div class="container">
    <h2 class="text-center" style="border-bottom: 4px solid #ff8680; font-family: 'Arial', sans-serif;">
        <b>Manual Aplikasi</b>
    </h2>

    <div class="bs-acc">
        <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" style="text-decoration: none;">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            Cara Berbelanja di RaiiJewelry? 💍
                        </h4>
                    </div>
                </a>
                <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <ol>
                            <li>📝 Pastikan Anda sudah <b>Daftar/Register</b>.</li>
                            <li>💎 Pilih perhiasan (gelang, kalung, cincin) yang ingin dibeli.</li>
                            <li>🛒 Tambahkan produk ke <b>Keranjang Belanja</b>.</li>
                            <li>💳 Lakukan <b>Checkout</b> dan pilih metode pembayaran.</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<br><br><br>

<?php 
include 'footer.php';
?>
