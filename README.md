# 🔧 Sistem Informasi Manajemen Sparepart (Laravel)

## 📌 Deskripsi Proyek
Proyek ini merupakan **Sistem Informasi Manajemen Sparepart berbasis Web** yang dibangun menggunakan **Framework Laravel**.  
Aplikasi ini digunakan untuk mengelola data sparepart, seperti **menampilkan data**, **menambah**, **mengedit**, dan **menghapus data sparepart**.

Proyek ini dibuat sebagai **tugas Ujian Akhir Semester (UAS)** pada mata kuliah **Web Programming**.

---

## 🎯 Tujuan Pembuatan
- Menerapkan konsep **CRUD (Create, Read, Update, Delete)**
- Memahami arsitektur **MVC (Model, View, Controller)** pada Laravel
- Menghubungkan aplikasi Laravel dengan **database MySQL**
- Mengelola database menggunakan **Migration & Eloquent ORM**
- Melatih pengembangan aplikasi web berbasis framework

---

## 🛠️ Teknologi yang Digunakan
- PHP 8.x  
- Laravel 12  
- MySQL (phpMyAdmin)  
- Bootstrap 5  
- XAMPP  
- Git & GitHub  

---

## ✨ Fitur Aplikasi
- Menampilkan daftar sparepart
- Menambahkan data sparepart
- Mengedit data sparepart
- Menghapus data sparepart
- Penyimpanan data menggunakan **Database MySQL**
- Tampilan antarmuka sederhana dan responsif

---

## 🗂️ Struktur Database
Tabel: **spareparts**

| Field        | Tipe Data |
|-------------|----------|
| id          | bigint (Primary Key) |
| nama_part   | varchar |
| kategori    | varchar |
| harga       | integer |
| stok        | integer |
| created_at | timestamp |
| updated_at | timestamp |

Struktur tabel dibuat menggunakan **Migration Laravel**.

---

## 🚀 Cara Menjalankan Proyek

### 1️⃣ Clone Repository
```bash
git clone https://github.com/USERNAME/REPO-SPAREPART.git
2️⃣ Masuk ke Folder Project
cd nama-project

3️⃣ Install Dependency
composer install

4️⃣ Copy File Environment
cp .env.example .env

5️⃣ Konfigurasi Database di .env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=uas_sparepart
DB_USERNAME=root
DB_PASSWORD=

6️⃣ Generate Application Key
php artisan key:generate

7️⃣ Migrasi Database
php artisan migrate

8️⃣ Jalankan Server
php artisan serve


Akses aplikasi melalui browser:

http://127.0.0.1:8000/sparepart
