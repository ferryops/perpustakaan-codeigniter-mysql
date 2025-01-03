<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Transaksi Peminjaman</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
        }
        .table th, .table td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }
        .table th {
            background-color: #f2f2f2;
        }
        h1 {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Laporan Transaksi Peminjaman</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Judul Buku</th>
                <th>Nama Peminjam</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali Direncanakan</th>
                <th>Denda</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($transaksi)): ?>
                <?php foreach ($transaksi as $item): ?>
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
                    <td colspan="4" style="text-align: center;">Tidak ada transaksi peminjaman.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>
