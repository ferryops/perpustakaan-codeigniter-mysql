<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Anggota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php include(APPPATH . 'Views/layout/navbar.php'); ?>
    <div class="container mt-5">
        <h1 class="mb-4">Detail Anggota</h1>
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <td><?= $anggota['id_anggota']; ?></td>
            </tr>
            <tr>
                <th>Nama</th>
                <td><?= $anggota['nama']; ?></td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td><?= $anggota['alamat']; ?></td>
            </tr>
            <tr>
                <th>Nomor Telepon</th>
                <td><?= $anggota['nomor_telepon']; ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?= $anggota['email']; ?></td>
            </tr>
        </table>
        <a href="/anggota" class="btn btn-secondary">Kembali</a>
    </div>
</body>
</html>
