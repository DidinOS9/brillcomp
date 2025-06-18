# 🌐 Laravel 11 Multi-Purpose Company Profile

Ini adalah proyek Company Profile berbasis **Laravel 11**, dikembangkan dari studi kasus kelas online di BuildWithAngga.  
Proyek ini menggunakan **Laravel Breeze**, **Spatie Role Permission**, dan struktur MVC yang clean dan siap dikembangkan lebih lanjut.

> 🎓 Studi Kasus: [Web Development Laravel 11 - Multi-Purpose Company Profile](https://buildwithangga.com/kelas/web-development-laravel-11-multi-purpose-company-profile)

---

## ✨ Fitur Unggulan

- ✅ **Authentication** dengan Laravel Breeze (Login & Register)
- 🔐 Manajemen **Role dan Permission** menggunakan Spatie
- 🧑‍💼 Admin panel sederhana untuk mengelola konten
- 📦 CRUD Data:
  - Produk
  - Klien
  - Tim
  - Testimonials
  - Hero Section
  - Appointment
  - About Section
- 📊 Dashboard statistik (dummy data)
- ⚙️ Struktur modular & scalable dengan MVC
- 💡 Bisa dikembangkan ke API atau CMS

---

## 🔧 Teknologi yang Digunakan

| Komponen         | Keterangan                           |
|------------------|----------------------------------------|
| Backend          | Laravel 11.x                          |
| Auth             | Laravel Breeze                        |
| Role/Permission  | [Spatie Laravel Permission](https://github.com/spatie/laravel-permission) |
| Frontend         | Tailwind CSS, Blade                   |
| Database         | MySQL/MariaDB                         |
| Tools            | Composer, NPM, Git, Vite              |

---

## ⚙️ Cara Instalasi Proyek

### 1. Clone Repository

```bash
git clone https://github.com/DidinOS9/brillcomp.git
cd brillcomp
```
### 2. Install Depedency Backend
```bash
composer install
```

### 3. Install Depedency Frontend
```bash
npm install && npm run dev
```

### 4. Konfigurasi Environment
```bash
cp .env.example .env
php artisan key:generate
```

### 5. Setup Database
- Buat database di MySQL (contoh: brillcomp)
- Atur konfigurasi .env
- Jalankan migrasi dan seeder:

```bash
php artisan migrate --seed
```

### 6. Jalankan Server Lokal
```bash
php artisan serve
```
Akses di: http://localhost:8000


## 🔐 Akun Admin Default

Akun berikut dibuat secara otomatis oleh `RolePermissionSeeder`.

| Email            | Password   | Role         |
|------------------|------------|--------------|
| super@admin.com  | 12341234   | super_admin  |

> Gunakan akun ini untuk mengakses fitur backend dan pengelolaan konten.

---

## 🗂️ Struktur Direktori Penting

```bash
brillcomp/
├── app/
│   ├── Models/
│   ├── Http/
│   │   ├── Controllers/
│   │   └── Middleware/
├── database/
│   ├── migrations/
│   ├── seeders/
│   └── factories/
├── resources/
│   └── views/
├── routes/
│   └── web.php
├── public/
│   └── assets/
├── .env.example
└── README.md
```
---

## 🚧 Rencana Pengembangan Selanjutnya

- [ ] Export konten ke PDF atau Excel
- [ ] Penerapan RESTful API
- [ ] Versi multi-bahasa

---

## 🤝 Kontribusi

Proyek ini masih dapat dikembangkan.  
Pull request, issue, dan diskusi sangat disambut!

---

## 📄 Lisensi

Proyek ini berlisensi **MIT**.  
Hak cipta © 2025 Didin Setiawan

---

## 📫 Kontak

Ingin berdiskusi atau kolaborasi?

- 📧 Email: [didinoktaviandasetiawan@gmail.com](mailto:didinoktaviandasetiawan@gmail.com)  
- 🔗 LinkedIn: [linkedin.com/in/didin-oktavianda-setiawan](https://www.linkedin.com/in/didin-oktavianda-setiawan/)
