<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php include(APPPATH . 'Views/layout/navbar.php'); ?>
    <div class="container mt-5">
        <h1 class="mb-4">Dashboard</h1>

        <!-- Statistik Singkat -->
        <div class="row mb-5">
            <div class="col-md-4">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Jumlah Buku</h5>
                        <p class="card-text fs-3"><?= $jumlah_buku; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-success mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Jumlah Anggota</h5>
                        <p class="card-text fs-3"><?= $jumlah_anggota; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-danger mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Transaksi Aktif</h5>
                        <p class="card-text fs-3"><?= $transaksi_aktif; ?></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Daftar Buku yang Sedang Dipinjam -->
        <h2 class="mb-4">Buku yang Sedang Dipinjam</h2>
        <a href="/dashboard/download-pdf" class="btn btn-danger mb-3">Download Laporan PDF</a>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>Judul Buku</th>
                        <th>Nama Peminjam</th>
                        <th>Tanggal Pinjam</th>
                        <th>Tanggal Kembali Direncanakan</th>
                        <th>Denda</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($buku_dipinjam)): ?>
                        <?php foreach ($buku_dipinjam as $item): ?>
                            <tr>
                                <td><?= $item['judul']; ?></td>
                                <td><?= $item['nama']; ?></td>
                                <td><?= $item['tanggal_pinjam']; ?></td>
                                <td><?= $item['tanggal_kembali_direncanakan']; ?></td>
                                <td><?= $item['denda']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="4" class="text-center">Tidak ada buku yang sedang dipinjam.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
