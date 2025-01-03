<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Transaksi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

</head>
<body>
<?php include(APPPATH . 'Views/layout/navbar.php'); ?>
    <div class="container mt-5">
        <h1 class="mb-4">Daftar Transaksi</h1>
        <a href="/transaksi/create" class="btn btn-primary mb-3">Tambah Transaksi</a>

        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
        <?php endif; ?>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID Transaksi</th>
                    <th>Nama Anggota</th>
                    <th>Kode Buku</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali Direncanakan</th>
                    <th>Tanggal Kembali</th>
                    <th>Denda</th>
                    <th width=140>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($transaksi as $item): ?>
                    <tr>
                        <td><?= $item['id_transaksi']; ?></td>
                        <td><?= $item['nama_anggota']; ?></td>
                        <td><?= $item['kode_buku']; ?></td>
                        <td><?= $item['tanggal_pinjam']; ?></td>
                        <td><?= $item['tanggal_kembali_direncanakan']; ?></td>
                        <td><?= $item['tanggal_kembali'] ?: '-'; ?></td>
                        <td><?= $item['denda']; ?></td>
                        <td>
                            <a href="/transaksi/show/<?= $item['id_transaksi']; ?>" class="btn btn-info btn-sm text-nowrap" data-bs-toggle="tooltip" title="Detail">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="/transaksi/edit/<?= $item['id_transaksi']; ?>" class="btn btn-warning btn-sm text-nowrap" data-bs-toggle="tooltip" title="Edit">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="/transaksi/delete/<?= $item['id_transaksi']; ?>" class="btn btn-danger btn-sm text-nowrap" data-bs-toggle="tooltip" title="Hapus" onclick="return confirm('Yakin ingin menghapus?');">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl);
            });
        });
    </script>

</body>
</html>
