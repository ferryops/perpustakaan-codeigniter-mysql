<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php include(APPPATH . 'Views/layout/navbar.php'); ?>
    <div class="container mt-5">
        <h1 class="mb-4">Detail Admin</h1>
        <table class="table table-bordered">
            <tr>
                <th>ID Admin</th>
                <td><?= $admin['id_admin']; ?></td>
            </tr>
            <tr>
                <th>Username</th>
                <td><?= $admin['username']; ?></td>
            </tr>
        </table>
        <a href="/admin" class="btn btn-secondary">Kembali</a>
    </div>
</body>
</html>
