<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
<?php include(APPPATH . 'Views/layout/navbar.php'); ?>
    <div class="container mt-5">
        <h1 class="mb-4">Daftar Admin</h1>
        <a href="/admin/create" class="btn btn-primary mb-3">Tambah Admin</a>

        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
        <?php endif; ?>

        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th width=140>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($admin as $item): ?>
                        <tr>
                            <td><?= $item['id_admin']; ?></td>
                            <td><?= $item['username']; ?></td>
                            <td>
                                <a href="/admin/show/<?= $item['id_admin']; ?>" class="btn btn-info btn-sm text-nowrap" data-bs-toggle="tooltip" title="Detail">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="/admin/edit/<?= $item['id_admin']; ?>" class="btn btn-warning btn-sm text-nowrap" data-bs-toggle="tooltip" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="/admin/delete/<?= $item['id_admin']; ?>" class="btn btn-danger btn-sm text-nowrap" data-bs-toggle="tooltip" title="Hapus" onclick="return confirm('Yakin ingin menghapus?');">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
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
