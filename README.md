# Perpustakaan CodeIgniter 4 + Bootstrap 5 + MySQL

## Fitur

- Manajemen Buku
- Manajemen Anggota
- Manajemen Peminjaman
- Manajemen Admin
- Dashboard Statistik

## Instalasi

1. Clone repository

```bash
git clone https://github.com/ferryops/perpustakaan-codeigniter-mysql.git
```

2. Masuk ke direktori project

```bash
cd perpustakaan-codeigniter-mysql
```

3. Install composer

```bash
composer install
```

4. Copy file env menjadi .env

```bash
cp env .env
```

5. Buat database baru di MySQL

```bash
   Dump database tersedia di app/Database/Dump/dump-library_stmik_palangkaraya-202501012333.sql
```

6. Konfigurasi database di file .env

```bash
DB_HOST=localhost
DB_USERNAME=root
DB_PASSWORD=
DB_NAME=perpustakaan
```

7. Jalankan server

```bash
php spark serve
```

8. Buka browser dan akses http://localhost:8080

## Screenshot
