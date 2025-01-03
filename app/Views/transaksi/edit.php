<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Transaksi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php include(APPPATH . 'Views/layout/navbar.php'); ?>
    <div class="container mt-5">
        <h1 class="mb-4">Edit Transaksi</h1>
        <form action="/transaksi/update/<?= $transaksi['id_transaksi']; ?>" method="post">
            <?= csrf_field(); ?>
            <div class="mb-3">
                <label for="id_anggota" class="form-label">ID Anggota</label>
                <select name="id_anggota" id="id_anggota" class="form-select">
                    <?php foreach ($anggota as $item): ?>
                        <option value="<?= $item['id_anggota']; ?>" <?= $transaksi['id_anggota'] == $item['id_anggota'] ? 'selected' : ''; ?>><?= $item['nama']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="kode_buku" class="form-label">Kode Buku</label>
                <select name="kode_buku" id="kode_buku" class="form-select">
                    <?php foreach ($buku as $item): ?>
                        <option value="<?= $item['kode_buku']; ?>" <?= $transaksi['kode_buku'] == $item['kode_buku'] ? 'selected' : ''; ?>><?= $item['judul']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="tanggal_pinjam" class="form-label">Tanggal Pinjam</label>
                <input type="date" name="tanggal_pinjam" id="tanggal_pinjam" class="form-control" value="<?= $transaksi['tanggal_pinjam']; ?>">
            </div>
            <div class="mb-3">
                <label for="tanggal_kembali_direncanakan" class="form-label">Tanggal Kembali Direncanakan</label>
                <input type="date" name="tanggal_kembali_direncanakan" id="tanggal_kembali_direncanakan" class="form-control" value="<?= $transaksi['tanggal_kembali_direncanakan']; ?>">
            </div>
            <div class="mb-3">
                <label for="tanggal_kembali" class="form-label">Tanggal Kembali</label>
                <input type="date" name="tanggal_kembali" id="tanggal_kembali" class="form-control" value="<?= $transaksi['tanggal_kembali']; ?>">
            </div>
            <div class="mb-3">
                <label for="denda" class="form-label">Denda</label>
                <input type="number" name="denda" id="denda" class="form-control" value="<?= $transaksi['denda']; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>
</html>
