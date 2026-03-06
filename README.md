# 🚀 Laravel Learning Journey

Repositori ini berisi catatan praktikum dan eksperimen saya dalam mempelajari framework Laravel, mulai dari dasar hingga konsep tingkat lanjut.

## 📚 Topik yang Telah Dipelajari

### 1. Database Optimization (N+1 Problem)
Mempelajari perbedaan antara memuat data secara efisien atau boros kueri.
* **Lazy Loading**: Mengambil data relasi di dalam loop (menyebabkan banyak kueri database).
* **Eager Loading**: Menggunakan `with()` untuk mengambil semua data relasi dalam satu kueri `WHERE IN`.
* **Global Eager Loading**: Menggunakan properti `$with` di dalam Model agar relasi selalu otomatis dimuat.

### 2. Data Structure & API Fundamentals
Memahami cara kerja data sebelum diolah oleh Laravel.
* **Array Types**: 
    * *Indexed Array* (Nomor urut)
    * *Associative Array* (Key => Value)
    * *Multidimensional Array* (Array di dalam Array)
* **JSON**: Mengenal format pertukaran data internasional dan cara mengubahnya menggunakan `json_encode()` & `json_decode()`.

### 3. Object-Oriented Programming (OOP)
Dasar dari seluruh sistem Laravel.
* **Class**: Cetakan/Blue print (Contoh: Class `Hero`).
* **Object**: Realisasi dari cetakan (Contoh: `$hero1 = new Hero()`).
* **Property & Method**: Sifat data dan aksi yang bisa dilakukan oleh objek.
* **Constructor**: Fungsi otomatis saat objek diciptakan.

### 4. Laravel Debugbar
Alat utama untuk memantau kesehatan aplikasi:
* Memonitor jumlah **Queries** untuk mencegah aplikasi lambat.
* Mengecek variabel yang dikirim ke **Views**.
* Melihat penggunaan memori dan waktu eksekusi.

---

## 🛠️ Cara Menjalankan Proyek
1. Clone repositori ini.
2. Jalankan `composer install`.
3. Copy `.env.example` ke `.env` dan sesuaikan database.
4. Jalankan `php artisan migrate --seed` (untuk mengisi data dummy 100 user & post).
5. Jalankan `php artisan serve`.

---
*Dibuat dengan ❤️ sambil belajar Laravel bersama Gemini.*