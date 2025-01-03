<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Library</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link <?= current_url() === base_url('/dashboard') ? 'active' : '' ?>" href="/dashboard">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= current_url() === base_url('/transaksi') ? 'active' : '' ?>" href="/transaksi">Transaksi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= current_url() === base_url('/buku') ? 'active' : '' ?>" href="/buku">Buku</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= current_url() === base_url('/anggota') ? 'active' : '' ?>" href="/anggota">Anggota</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= current_url() === base_url('/logout') ? 'active' : '' ?>" href="/logout">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
