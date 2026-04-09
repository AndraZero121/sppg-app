# Materi: Panduan Belajar — SPPG-App yang sudah nafi pelajari

ini merangkum arsitektur, alur utama, dan topik penting yang perlu dipelajari dari project SPPG-app yang nafi pelajari

1. gambaran Umum

- Framework: Laravel 12 (PHP 8.x)
- Database: default proyek menggunakan SQLite (lihat `.env` DB_CONNECTION=sqlite)
- UI: Blade + Tailwind CSS
- Tujuan: untuk tugas ukk dan memperdalam pengetahuan laravel

📊 **LIHAT DATABASE DIAGRAM**: Buka file `DATABASE_DIAGRAM.html` di browser Anda untuk melihat visualisasi lengkap relasi tabel database.

1. persiapan & Menjalankan Aplikasi

- Buat storage symlink:

    php artisan storage:link

- Migrasi dan seeding:

    php artisan migrate
    php artisan db:seed

- Menjalankan server dev:

    php artisan serve
    npm run dev

1. struktur Penting (lokasi file)

- Routes: `routes/web.php` — route publik, auth, dan admin (prefix `admin.`).
- Controllers:
    - `app/Http/Controllers/PublicController.php` — halaman publik (home, menu, tim, pengaduan).
    - `app/Http/Controllers/AuthController.php` — login/register/logout.
    - `app/Http/Controllers/Admin/*` — CRUD untuk `schools`, `sppg-teams`, `menus`, `complaints`.
- Models: `app/Models/*` — `User`, `School`, `SppgTeam`, `Menu`, `Complaint`.
- Views: `resources/views/` — `layouts/`, `admin/`, `menus/`, `teams/`, `auth/`, dsb.
- Form Requests (validation): `app/Http/Requests/*` untuk store/update tiap resource.
- Migrations & Factories: `database/migrations`, `database/factories`, `database/seeders`.

4. Alur Data & Fitur Utama

- Auth: register menghasilkan role `petugas_gizi` secara default; `User::isAdmin()` menentukan akses admin.
- Admin dashboard: CRUD untuk Schools, SppgTeam, Menus, Complaints; statistik sederhana menggunakan Model::count().
- Public pages: lihat daftar menu (hanya yang `is_published`), daftar tim SPPG, form pengaduan publik.
- Upload file: foto disimpan via `$request->file('photo')->store(..., 'public')`, path disimpan di kolom `photo_path`, diakses dengan `asset('storage/'.$model->photo_path)`.

5. Models & Database (ringkas)

- `users` : name, email, password, role (ditambahkan migration `add_role_to_users_table`).
- `schools` : name, npsn, address, district, city, students*count, contact*\*.
- `sppg_teams` : name, leader_name, phone, coverage_area, members_count, notes, photo_path.
- `menus` : served_on (date), name, description, calories/protein/fat/carbs/fiber, photo_path, is_published.
- `complaints` : ticket, title, description, category, location, reporter_name/contact, status.

6. Validasi & Form Requests

- Semua create/update operations memakai FormRequest classes (`StoreXxxRequest`, `UpdateXxxRequest`).
- Periksa pesan custom di method `messages()` untuk terjemahan Bahasa Indonesia.

7. Views & Layout Pattern

- Layout admin menggunakan Blade `resources/views/layouts/admin.blade.php`.
- Komponen forms terpisah (`admin/*/form.blade.php`) dipakai oleh `create` dan `edit`.
- Konsistensi: Tailwind utility classes, card style, tombol rounded-2xl.

8. Auth & Middleware

- Middleware `admin` didefinisikan alias di `bootstrap/app.php` dan digunakan di route group admin.
- Pastikan session driver dan APP_KEY di `.env` terkonfigurasi.

9. Factories & Seeders

- Factories untuk `User`, `School`, `SppgTeam`, `Menu`, `Complaint` ada di `database/factories`.
- `DatabaseSeeder` membuat admin dan petugas_gizi default kemudian memanggil seeders resource.

10. Testing (Pest)

- Project menggunakan Pest (lihat `tests/`), jalankan:

    php artisan test --filter=NamaTest

11. Alur yang sering ditanyakan (Q&A cepat)

- Menambahkan field baru: buat migration -> update Model `$fillable` -> update FormRequest rules -> update form view -> update controller untuk menyimpan.
- Mengganti disk storage: update `FILESYSTEM_DISK` di `.env` dan gunakan Storage facade.
- Menangani foto lama saat update: hapus file lama via `Storage::disk('public')->delete($model->photo_path)` sebelum store.

12. Daftar Topik Pelajaran (prioritas)

- Setup & menjalankan lokal (migrate, seed, storage:link)
- Routes & nama route (penting untuk redirect)
- FormRequest validation (rules/messages)
- File upload flow (form enctype, controller, storage, access via asset)
- Role-based admin (middleware `admin`, `User::isAdmin()`)
- Blade partials & layout (admin sidebar fixed, logout button di bawah)
- Factories & seeders untuk testing/data sample

13. Cheatsheet Perintah

    php artisan migrate
    php artisan db:seed
    php artisan storage:link
    php artisan serve
    npm run dev
    php artisan test

14. Saran Belajar untuk Sesi Tanya Jawab

- Bawa 6-8 pertanyaan spesifik (mis. "bagaimana menambah kolom X ke model Y?").
- Praktikkan 1 perubahan end-to-end sebelum sesi: tambah field sederhana dan commit.
- Siapkan contoh output dari `php artisan migrate --pretend` jika perlu menjelaskan perubahan DB.

Jika Anda mau, saya bisa:

- Masukkan referensi file/line untuk tiap topik (contoh: `app/Http/Controllers/PublicController.php#L10`).
- Buatkan kartu Q&A singkat untuk setiap topik.
- Jalankan perintah migrasi & seed di lingkungan Anda jika Anda mau saya pandu langkah demi langkah.

-- tamat --
