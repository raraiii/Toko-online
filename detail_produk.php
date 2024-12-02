<form action="proses/add.php" method="POST">
    <input type="hidden" name="kd_cs" value="<?= $kode_cs; ?>">
    <input type="hidden" name="produk" value="<?= $kode;  ?>">
    <input type="hidden" name="hal" value="2">
    <table class="table table-striped">
        <tbody>
            <tr>
                <td><b>Nama</b></td>
                <td><?= $row['nama']; ?></td>
            </tr>
            <tr>
                <td><b>Harga</b></td>
                <td>Rp.<?= number_format($row['harga']); ?></td>
            </tr>
            <tr>
                <td><b>Deskripsi</b></td>
                <td><?= $row['deskripsi']; ?></td>
            </tr>
            <tr>
                <td><b>Jumlah</b></td>
                <td><input class="form-control" type="number" min="1" name="jml" value="1" style="width: 155px;"></td>
            </tr>
        </tbody>
    </table>
    <?php 
    if(isset($_SESSION['user'])){
        ?>
        <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-shopping-cart"></i> Tambahkan ke Keranjang</button>
        <?php 
    } else {
        ?>
        <a href="keranjang.php" class="btn btn-success"><i class="glyphicon glyphicon-shopping-cart"></i> Tambahkan ke Keranjang</a>
        <?php 
    }
    ?>
    <a href="index.php" class="btn btn-warning"> Kembali Belanja</a>
</form>
