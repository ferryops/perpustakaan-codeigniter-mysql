<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php include(APPPATH . 'Views/layout/navbar.php'); ?>
    <div class="container mt-5">
        <h1 class="mb-4">Edit Buku</h1>
        <form action="/buku/update/<?= $buku['kode_buku']; ?>" method="post">
            <?= csrf_field(); ?>
            <div class="mb-3">
                <label for="kode_buku" class="form-label">Kode Buku</label>
                <input type="text" name="kode_buku" id="kode_buku" class="form-control" value="<?= $buku['kode_buku']; ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" name="judul" id="judul" class="form-control" value="<?= $buku['judul']; ?>">
            </div>
            <div class="mb-3">
                <label for="penulis" class="form-label">Penulis</label>
                <input type="text" name="penulis" id="penulis" class="form-control" value="<?= $buku['penulis']; ?>">
            </div>
            <div class="mb-3">
                <label for="penerbit" class="form-label">Penerbit</label>
                <input type="text" name="penerbit" id="penerbit" class="form-control" value="<?= $buku['penerbit']; ?>">
            </div>
            <div class="mb-3">
                <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                <input type="number" name="tahun_terbit" id="tahun_terbit" class="form-control" value="<?= $buku['tahun_terbit']; ?>">
            </div>
            <div class="mb-3">
                <label for="jumlah_eksemplar" class="form-label">Jumlah Eksemplar</label>
                <input type="number" name="jumlah_eksemplar" id="jumlah_eksemplar" class="form-control" value="<?= $buku['jumlah_eksemplar']; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>
</html>
