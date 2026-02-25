🎓 Portal Akademik (SIAKAD) – NextGen Laravel 12
Selamat datang di repositori Sistem Informasi Akademik. Project ini merupakan aplikasi manajemen data perkuliahan yang dirancang menggunakan Laravel 12 sebagai mesin utamanya. Fokus pengembangan terletak pada efisiensi pengelolaan data Mahasiswa dan Mata Kuliah melalui pendekatan Clean Code dan arsitektur MVC (Model-View-Controller) yang modern.

⚡ Keunggulan Sistem
🛡️ Autentikasi & Proteksi Berlapis
Secure Access: Sistem login dan registrasi terintegrasi menggunakan Laravel Breeze.

Smart Middleware (IkmiEmailOnly): Mekanisme validasi khusus yang membatasi otoritas penghapusan data. Hanya pengguna dengan domain email @ikmi.ac.id yang diizinkan melakukan aksi destruktif (Delete).

Route Guard: Seluruh modul inti diproteksi oleh middleware auth untuk menjamin privasi data.

📊 Dashboard Monitoring
Visualisasi data ringkas mengenai statistik jumlah mahasiswa dan distribusi mata kuliah.

Antarmuka responsif dan bersih dengan dukungan Tailwind CSS.

📁 Modul Mahasiswa
Operasi CRUD (Create, Read, Update, Delete) yang dinamis.

Fitur pencarian instan dan navigasi pagination.

Relasi basis data yang kuat antara Mahasiswa dan Mata Kuliah.

Validasi data otomatis untuk mencegah duplikasi NIM.

📖 Katalog Mata Kuliah
Manajemen detail perkuliahan (SKS, Kode, dan Dosen Pengampu).

Deep Insight: Melihat daftar mahasiswa yang terdaftar di setiap mata kuliah secara spesifik.

🛠️ Stack Teknologi
Core: Laravel 12 (PHP 8.2+)

UI Engine: Blade Templates & Tailwind CSS

Persistence: MySQL Database

Security: Laravel Breeze (Breeze Authentication)

Development Tools: Composer, NPM, Vite

⚙️ Panduan Instalasi Lokal
Siapkan lingkungan pengembangan Anda (XAMPP/Laragon) dan ikuti langkah berikut:

1. Replikasi Repositori
Bash
git clone https://github.com/ibraiiian/MK-PWL-modul1.git
cd MK-PWL-modul1
2. Setup Dependensi
Pasang semua library PHP dan paket frontend yang diperlukan:

Bash
composer install
npm install
3. Konfigurasi Environment
Salin file template .env:

Bash
cp .env.example .env
Sesuaikan detail koneksi database pada file .env (DB_DATABASE, DB_USERNAME, dll).

4. Finalisasi Database
Generate kunci aplikasi dan jalankan migrasi tabel:

Bash
php artisan key:generate
php artisan migrate
5. Deployment Lokal
Jalankan server Laravel dan compiler aset secara bersamaan di terminal terpisah:

Terminal 1: php artisan serve

Terminal 2: npm run dev

Buka browser Anda di: http://127.0.0.1:8000

🧪 Skenario Pengujian (Role Access)
Untuk mencoba fitur Custom Middleware, Anda bisa mendaftarkan dua akun berbeda:

Privileged User: Gunakan email @ikmi.ac.id (Dapat menghapus data).

Regular User: Gunakan email umum seperti Gmail (Akses hapus akan ditolak/403).

🏛️ Organisasi Kode
app/Models: Blueprint entitas data.

app/Http/Controllers: Otak pemrosesan logika bisnis.

resources/views: Layer presentasi (User Interface).

routes/web.php: Peta navigasi URL.

✍️ Author: YUMELA (43240449)
📚 Course: Pemrograman Web Lanjut
👨‍🏫 Instructor: Bpk. Rudi Kurniawan
