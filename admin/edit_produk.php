<?php 
include 'header.php';

// generate kode material
$kode_produk = $_GET['kode'];
$kode = mysqli_query($conn, "SELECT * from produk where kode_produk = '$kode_produk'");
$data = mysqli_fetch_assoc($kode);
?>

<div class="container mt-5">
    <h2 class="text-center border-bottom pb-3 mb-4"><b>Edit Produk</b></h2>

    <form action="proses/edit_produk.php" method="POST" enctype="multipart/form-data">
        <div class="mb-4 text-center">
            <img src="../image/produk/<?= $data['image']; ?>" width="150" class="img-thumbnail">
            <input type="file" class="form-control mt-2" name="files">
            <small class="text-muted">Pilih gambar untuk produk</small>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="kodeProduk" class="form-label">Kode Produk</label>
                <input type="text" class="form-control" id="kodeProduk" disabled value="<?= $data['kode_produk']; ?>">
                <input type="hidden" name="kode" value="<?= $data['kode_produk']; ?>">
            </div>

            <div class="col-md-6 mb-3">
                <label for="namaProduk" class="form-label">Nama Produk</label>
                <input type="text" class="form-control" id="namaProduk" name="nama" value="<?= $data['nama']; ?>">
            </div>

            <div class="col-md-6 mb-3">
                <label for="hargaProduk" class="form-label">Harga</label>
                <input type="number" class="form-control" id="hargaProduk" name="harga" value="<?= $data['harga']; ?>">
            </div>
        </div>

        <div class="mb-3">
            <label for="deskripsiProduk" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="deskripsiProduk" name="desk" rows="3"><?= $data['deskripsi']; ?></textarea>
        </div>

        <hr>
        <h3 class="mb-4 border-bottom pb-3">BOM Produk</h3>

        <div class="row">
            <div class="col-md-6">
                <h4>Daftar Material</h4>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Kode Material</th>
                            <th scope="col">Nama Material</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $result2 = mysqli_query($conn, "SELECT * FROM inventory order by kode_bk asc");
                        $no2 = 1;
                        while ($row2 = mysqli_fetch_assoc($result2)) { ?>
                            <tr>
                                <th scope="row"><?= $no2; ?></th>
                                <td><?= $row2['kode_bk']; ?></td>
                                <td><?= $row2['nama']; ?></td>
                            </tr>
                        <?php 
                        $no2++;
                        } ?>
                    </tbody>
                </table>
            </div>

            <div class="col-md-6">
                <h4>Pilih Material</h4>
                <div class="alert alert-danger">
                    <strong>NB:</strong> Form tidak harus diisi semua dan kode material tidak boleh sama.
                </div>

                <?php 
                $result3 = mysqli_query($conn, "SELECT * FROM bom_produk where kode_produk = '$kode_produk'");
                $jml = mysqli_num_rows($result3);
                $no3 = 1;
                while ($no3 <= $jml) {
                    $row3 = mysqli_fetch_assoc($result3); ?>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="kodeMaterial<?= $no3; ?>" class="form-label">Kode Material</label>
                            <input type="text" class="form-control" name="material[]" placeholder="Masukkan Kode Material" value="<?= $row3['kode_bk']; ?>" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="kebutuhanMaterial<?= $no3; ?>" class="form-label">Kebutuhan Material</label>
                            <input type="text" class="form-control" name="keb[]" placeholder="Contoh: 250 atau 0.2" value="<?= $row3['kebutuhan']; ?>" required>
                        </div>
                    </div>
                <?php 
                    $no3++;
                } ?>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-6">
                <button type="submit" class="btn btn-warning w-100"><i class="fas fa-edit"></i> Edit</button>
            </div>
            <div class="col-md-6">
                <a href="m_produk.php" class="btn btn-danger w-100">Cancel</a>
            </div>
        </div>
    </form>
</div>

<?php 
include 'footer.php';
?>
