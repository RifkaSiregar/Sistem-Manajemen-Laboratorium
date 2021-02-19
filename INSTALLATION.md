# 20-06-simalab
Repository ini digunakan untuk menyimpan artefak proyek mata kuliah 12S3101 Pemrograman dan Pengujian Aplikasi Web di Institut Teknologi Del.  Topik: Sistem Informasi Manajemen Laboratorium
# Restful-API-using-Laravel 
Proyek ini berjalan dengan Laravel versi 4.10.
# Getting started

# Install Composer
composer install
# Install Laravel 
composer global require laravel/installer
# Buat folder laravel 
composer create-project --prefer-dist laravel/laravel Simalab

# Buat Configurasi
Jalankan perintah berikut untuk membuat kunci aplikasi Anda:
Buat database baru dan beri nama "p06_db  ". Ubah config / database.php agar sesuai dengan konfigurasi lokal Anda. atau Buat pengguna baru. username: p06_gnf2        password: lTwqObjBHN

# Atur env
Selanjutnya Anda perlu membuat salinan file .env.example dan mengganti namanya menjadi .env di dalam root  Anda.

php artisan key:generate

Kemudian mulai server Anda:

php artisan serve


