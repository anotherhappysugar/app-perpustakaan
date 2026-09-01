# App Perpustakaan

Aplikasi web manajemen perpustakaan berbasis framework Laravel 12. Aplikasi ini bertujuan untuk mempermudah pengelolaan data buku, anggota, serta proses transaksi peminjaman perpustakaan secara digital.

## Cara Menjalankan Project Secara Lokal

1. Pastikan server MySQL di XAMPP sudah aktif dan database `db_perpustakaan` sudah dibuat.
2. Buka terminal di folder project `app-perpustakaan`.
3. Jalankan migrasi database (jika belum):
   php artisan migrate
4. Jalankan server lokal Laravel:
   php artisan serve
5. Akses aplikasi melalui browser di alamat `http://127.0.0.1:8000`.

## Pemahaman Konsep MVC (Model, View, Controller)

Model bertugas mengelola struktur data dan logika bisnis yang berhubungan langsung dengan database. View berfungsi untuk menampilkan antarmuka visual (UI) yang dilihat dan diinteraksi oleh pengguna. Controller bertindak sebagai jembatan yang menerima permintaan pengguna, memproses data melalui Model, dan meneruskan hasilnya ke View.