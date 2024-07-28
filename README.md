# Website Desa Dompyongkulon menggunakan ReactJS + Laravel

Website Desa Dompyongkulon adalah sebuah platform digital yang dirancang untuk menyediakan informasi terkini dan layanan interaktif bagi masyarakat Desa Dompyongkulon. Website ini dibangun menggunakan teknologi modern seperti ReactJS di sisi frontend dan Laravel di sisi backend, memberikan performa tinggi, skalabilitas, dan pengalaman pengguna yang menyenangkan.

## Persyaratan

Pastikan Anda memiliki hal-hal berikut sebelum memulai:

- [Node.js](https://nodejs.org/) versi 14 atau lebih baru
- [npm](https://www.npmjs.com/) atau [yarn](https://yarnpkg.com/)
- [PHP](https://www.php.net/) versi 8.3 atau lebih baru
- [Composer](https://getcomposer.org/)
- [Laravel](https://laravel.com/) versi 11 atau lebih baru
- [MySQL](https://www.mysql.com/)

## Instalasi

Ikuti langkah-langkah di bawah ini untuk menginstal proyek ini.

## Konfigurasi Backend

1. Meng-clone Repositori:

   ```sh
   git clone https://github.com/lucielol/ProjectWebPro.git
   ```

2. Masuk ke folder backend:

   ```sh
   cd backend
   ```

3. Instal dependensi backend PHP dengan Composer

   ```sh
   composer install
   ```

4. Salin file `.env.example` menjadi `.env` dan konfigurasi file .env:

   ### Linux

   ```sh
   cp .env.example .env
   ```

   ### Windows

   ```sh
   copy .env.example .env
   ```

5. Generate key aplikasi Laravel:

   ```sh
   php artisan key:generate
   ```

6. Symlink storage folder

   ```sh
   php artisan storage:link
   ```

   Jika terjadi error seperti ini

   `ERROR` The `[path\backend\public\storage]` link already exists.

   Harap hapus manual folder `backend\public\storage` lalu ulangi

   ```sh
   php artisan storage:link
   ```

7. Migrasi dan seeding database

   ```sh
   php artisan migrate --seed
   ```

   atau

   ```sh
   php artisan migrate
   php artisan db:seed
   ```

## Konfigurasi Frontend

1. Masuk ke folder frontend:

   ```sh
   cd frontend
   ```

2. Instal dependensi frontend JavaScript dengan npm atau yarn:

   ```sh
   npm install
   ```

   atau

   ```sh
   yarn install
   ```

### Menjalankan Aplikasi

Ikuti langkah-langkah di bawah ini untuk menjalankan aplikasi

1. Jalankan server Laravel:

   ```sh
   php artisan serve
   ```

   Anda akan melihat pesan bahwa server berjalan di
   `http://localhost:8000`

2. Jalankan server Frontend:

   ```sh
   npm start
   ```

3. Buka browser dan akses `http://localhost:3000` untuk melihat aplikasi berjalan.

## Akun Login

Email: `admin@mail.com` \
Password: `admin123`
