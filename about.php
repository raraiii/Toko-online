<?php 
include 'header.php';
?>

<style>
    .about-container {
        padding: 50px 20px;
        background-color: #fff5f0;
        border-radius: 15px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        font-family: 'Comic Sans MS', cursive;
    }

    .about-title {
        font-family: 'Comic Sans MS', cursive;
        font-size: 32px;
        color: #ff8680;
        text-align: center;
        border-bottom: 4px solid #ff8680;
        padding-bottom: 10px;
        margin-bottom: 30px;
        display: inline-block;
        width: fit-content;
    }

    .about-text {
        font-size: 18px;
        line-height: 1.8;
        color: #333;
        text-align: justify;
    }

    .about-section {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 20px;
        flex-wrap: wrap;
    }

    .about-image {
        flex: 1;
        min-width: 300px;
        max-width: 500px;
        margin: auto;
    }

    .about-image img {
        width: 100%;
        border-radius: 15px;
        border: 5px solid #ffb6c1;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .about-content {
        flex: 2;
    }
</style>

<div class="container" style="padding-bottom: 100px;">
    <h2 class="about-title"><b>💍 Tentang Raii Jewelry 💍</b></h2>
    
    <div class="about-container">
        <div class="about-section">
            <!-- Gambar dengan bingkai -->
            <div class="about-image">
                <img src="image/home/rai.jpg" alt="Tentang Kami">
            </div>

            <!-- Konten teks tentang kami -->
            <div class="about-content">
                <p class="about-text">
                    Raii Jewelry adalah tempat terbaik untuk menemukan berbagai koleksi perhiasan berkualitas tinggi seperti <b>gelang</b>, <b>cincin</b>, dan <b>kalung</b>. Kami menyediakan berbagai model yang elegan dan trendi, cocok untuk berbagai acara dan gaya hidup. Setiap produk kami dibuat dengan bahan terbaik dan desain yang memukau.
                </p>
                <p class="about-text">
                    Sejak berdiri, Raii Jewelry terus berkembang dan menjadi pilihan utama bagi banyak pelanggan yang mencari perhiasan yang tidak hanya indah, tetapi juga terjangkau. Kami berkomitmen untuk memberikan pengalaman berbelanja yang nyaman dan aman, serta produk berkualitas yang akan menemani momen-momen spesial Anda.
                </p>
            </div>
        </div>
    </div>
</div>

<?php 
include 'footer.php';
?>
