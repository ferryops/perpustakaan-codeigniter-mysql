<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php include(APPPATH . 'Views/layout/navbar.php'); ?>
    <div class="container mt-5">
        <h1 class="mb-4">Detail Buku</h1>
        <table class="table table-bordered">
            <tr>
                <th>Kode Buku</th>
                <td><?= $buku['kode_buku']; ?></td>
            </tr>
            <tr>
                <th>Judul</th>
                <td><?= $buku['judul']; ?></td>
            </tr>
            <tr>
                <th>Penulis</th>
                <td><?= $buku['penulis']; ?></td>
            </tr>
            <tr>
                <th>Penerbit</th>
                <td><?= $buku['penerbit']; ?></td>
            </tr>
            <tr>
                <th>Tahun Terbit</th>
                <td><?= $buku['tahun_terbit']; ?></td>
            </tr>
            <tr>
                <th>Jumlah Eksemplar</th>
                <td><?= $buku['jumlah_eksemplar']; ?></td>
            </tr>
        </table>
        <a href="/buku" class="btn btn-secondary">Kembali</a>
    </div>
</body>
</html>
