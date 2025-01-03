# Perpustakaan CodeIgniter 4 + Bootstrap 5 + MySQL

## Fitur

- Manajemen Buku
- Manajemen Anggota
- Manajemen Peminjaman
- Manajemen Admin
- Dashboard Statistik
- Download Laporan Peminjaman ke PDF

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

<img width="1280" alt="Login Admin" src="https://github.com/user-attachments/assets/608fa0b5-6a15-4ab0-9ef2-91a749482f98" />

<img width="1280" alt="Daftar Transaksi" src="https://github.com/user-attachments/assets/1541464d-7dda-431a-a1b6-1f2294604460" />

<img width="1280" alt="Daftar Buku" src="https://github.com/user-attachments/assets/587e7ce4-6a00-45ac-ad8f-f8b24db7f41a" />

<img width="1280" alt="Daftar Anggota" src="https://github.com/user-attachments/assets/5f9919ad-056b-4997-b283-02c854113a6d" />

<img width="1280" alt="Dashboard Statistik" src="https://github.com/user-attachments/assets/7d58fdab-dc28-4ac4-a984-2d6bfe7d53a7" />





