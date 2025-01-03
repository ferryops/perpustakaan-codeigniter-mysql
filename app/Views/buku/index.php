<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
<?php include(APPPATH . 'Views/layout/navbar.php'); ?>
    <div class="container mt-5">
        <h1 class="mb-4">Daftar Buku</h1>
        
        <form action="/buku" method="get" class="mb-4">
            <div class="input-group">
                <input type="text" name="keyword" class="form-control" placeholder="Cari berdasarkan judul atau kode buku" value="<?= esc($keyword); ?>">
                <button class="btn btn-primary" type="submit">Cari</button>
            </div>
        </form> 


        <a href="/buku/create" class="btn btn-primary mb-3">Tambah Buku</a>

        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
        <?php endif; ?>

        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>Kode Buku</th>
                        <th>Judul</th>
                        <th>Penulis</th>
                        <th>Penerbit</th>
                        <th>Tahun Terbit</th>
                        <th>Jumlah Eksemplar</th>
                        <th width=140>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($buku)): ?>
                        <?php foreach ($buku as $item): ?>
                            <tr>
                                <td><?= $item['kode_buku']; ?></td>
                                <td><?= $item['judul']; ?></td>
                                <td><?= $item['penulis']; ?></td>
                                <td><?= $item['penerbit']; ?></td>
                                <td><?= $item['tahun_terbit']; ?></td>
                                <td><?= $item['jumlah_eksemplar']; ?></td>
                                <td>
                                    <a href="/buku/show/<?= $item['kode_buku']; ?>" class="btn btn-info btn-sm text-nowrap" data-bs-toggle="tooltip" title="Detail">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="/buku/edit/<?= $item['kode_buku']; ?>" class="btn btn-warning btn-sm text-nowrap" data-bs-toggle="tooltip" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="/buku/delete/<?= $item['kode_buku']; ?>" class="btn btn-danger btn-sm text-nowrap" data-bs-toggle="tooltip" title="Hapus" onclick="return confirm('Yakin ingin menghapus?');">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="7" class="text-center">Tidak ada data buku ditemukan.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
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
