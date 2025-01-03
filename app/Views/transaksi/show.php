<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Transaksi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php include(APPPATH . 'Views/layout/navbar.php'); ?>
    <div class="container mt-5">
        <h1 class="mb-4">Detail Transaksi</h1>
        <table class="table table-bordered">
            <tr>
                <th>ID Transaksi</th>
                <td><?= $transaksi['id_transaksi']; ?></td>
            </tr>
            <tr>
                <th>ID Anggota</th>
                <td><?= $transaksi['id_anggota']; ?></td>
            </tr>
            <tr>
                <th>Kode Buku</th>
                <td><?= $transaksi['kode_buku']; ?></td>
            </tr>
            <tr>
                <th>Tanggal Pinjam</th>
                <td><?= $transaksi['tanggal_pinjam']; ?></td>
            </tr>
            <tr>
                <th>Tanggal Kembali Direncanakan</th>
                <td><?= $transaksi['tanggal_kembali_direncanakan']; ?></td>
            </tr>
            <tr>
                <th>Tanggal Kembali</th>
                <td><?= $transaksi['tanggal_kembali'] ?: '-'; ?></td>
            </tr>
            <tr>
                <th>Denda</th>
                <td>Rp<?= number_format($transaksi['denda'], 0, ',', '.'); ?></td>
            </tr>
        </table>
        <a href="/transaksi" class="btn btn-secondary">Kembali</a>
    </div>
</body>
</html>
