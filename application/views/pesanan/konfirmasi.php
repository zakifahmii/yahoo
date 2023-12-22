<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Konfirmasi Pesanan</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/'); ?>konfirmasi.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <h1>Konfirmasi Pesanan</h1>
    <div class="card mb-3" style="max-width: 540px;">
        <?php if (!empty($barang)) : ?>
        <div class="row g-0">
            <div class="col-md-4">
                <img src="<?php echo base_url('assets/img/') . $barang['gambar']; ?>" alt="Gambar Barang">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $barang['nama_barang']; ?></h5>
                    <p class="card-text">Harga: Rp <?php echo $barang['harga']; ?></p>
                    <p class="card-text">Kategori: <?php echo $barang['kategori']; ?></p>
                    <form action="<?php echo base_url('pesanan/beli/') . $barang['id_brg']; ?>" method="POST">
                        <label for="jumlah">Jumlah:</label>
                        <input type="number" id="jumlah" name="jumlah" min="1" value="1">
                        <a href="<?php echo base_url('pesanan/beli/') . $barang['id_brg']; ?>"
                            class="btn btn-primary">Beli
                            Sekarang</a>
                        <a href="<?php echo base_url('produk/'); ?>" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
        <?php else : ?>
        <p>Informasi barang tidak tersedia.</p>
        <?php endif; ?>
    </div>

</body>

</html>