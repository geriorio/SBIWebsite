# File Yang Sudah Diubah untuk Production Deployment

## ✅ File yang SUDAH DIUBAH:

### 1. `.env` (File Utama - Sudah Disesuaikan)
**Perubahan:**
- `APP_NAME` → "Samudera Biru International"
- `APP_ENV` → `production` (dari `local`)
- `APP_DEBUG` → `false` (dari `true`) ⚠️ PENTING!
- `APP_URL` → `https://samuderabiru.net` (dari `http://localhost`)
- `LOG_LEVEL` → `error` (dari `debug`)
- `DB_HOST` → `localhost` (dari `127.0.0.1`)
- `DB_DATABASE` → `samf9781_sbi`
- `DB_USERNAME` → `samf9781_sbiuser`
- `DB_PASSWORD` → **KOSONG - HARUS DIISI DI SERVER!**
- `MAIL_MAILER` → `smtp` (dari `log`)
- `MAIL_HOST` → `smtp.gmail.com`
- `MAIL_PORT` → `587`
- `MAIL_SCHEME` → `tls`
- `MAIL_FROM_ADDRESS` → `noreply@samuderabiru.net`
- `MAIL_USERNAME` → **HARUS DIISI!**
- `MAIL_PASSWORD` → **HARUS DIISI!**

---

## ⚠️ YANG HARUS ANDA LAKUKAN SEBELUM ZIP:

### 1. Build Assets (Jika belum):
```bash
npm install
npm run build
```
Ini akan generate folder `public/build` yang berisi CSS/JS production.

### 2. Hapus Folder Berikut (JANGAN DI-ZIP):
- ❌ `node_modules/` (akan diinstall ulang di server)
- ❌ `vendor/` (akan diinstall ulang di server)
- ❌ `.git/` (jika ada)
- ❌ `storage/logs/*.log` (hapus file log)

### 3. File yang BOLEH DIHAPUS (Opsional):
- ❌ `test_newsletter.php` (file testing, tidak perlu di production)
- ❌ `public/test-newsletter.html` (file testing)
- ❌ `DEPLOYMENT_NOTES.md` (file ini, hanya untuk referensi lokal)
- ❌ `READY_FOR_DEPLOYMENT.md` (file summary ini)

---

## 📦 STRUKTUR FILE YANG AKAN DI-ZIP:

```
SBIWebsite/
├── app/                    ✅ ZIP
├── bootstrap/              ✅ ZIP
├── config/                 ✅ ZIP
├── database/               ✅ ZIP
├── public/                 ✅ ZIP
│   ├── build/             ✅ ZIP (hasil npm run build)
│   ├── images/            ✅ ZIP
│   ├── videos/            ✅ ZIP
│   ├── .htaccess          ✅ ZIP
│   ├── index.php          ✅ ZIP
│   └── robots.txt         ✅ ZIP
├── resources/              ✅ ZIP
├── routes/                 ✅ ZIP
├── storage/                ✅ ZIP
│   └── logs/              ✅ ZIP (kosongkan file log dulu)
├── tests/                  ✅ ZIP
├── .env                    ✅ ZIP (sudah disesuaikan)
├── .env.example            ✅ ZIP
├── .gitignore              ✅ ZIP
├── artisan                 ✅ ZIP
├── composer.json           ✅ ZIP
├── composer.lock           ✅ ZIP
├── package.json            ✅ ZIP
├── phpunit.xml             ✅ ZIP
├── vite.config.js          ✅ ZIP
├── README.md               ✅ ZIP
└── DATABASE_SETUP.md       ✅ ZIP

JANGAN ZIP:
├── node_modules/           ❌ JANGAN
├── vendor/                 ❌ JANGAN
├── .git/                   ❌ JANGAN
├── test_newsletter.php     ❌ HAPUS (opsional)
└── public/test-newsletter.html  ❌ HAPUS (opsional)
```

---

## 🔧 YANG HARUS DILAKUKAN DI SERVER (SETELAH UPLOAD):

### 1. Edit `.env` di Server:
Buka file `/public_html/.env` dan isi:
```env
DB_PASSWORD=password_dari_cpanel_database
MAIL_USERNAME=your_email@gmail.com
MAIL_PASSWORD=your_gmail_app_password
```

### 2. Install Composer Dependencies (Jika Ada Terminal):
```bash
cd /home/samf9781/public_html
composer install --no-dev --optimize-autoloader
```

**Jika TIDAK ada Terminal:**
- Upload folder `vendor/` juga dari lokal (tapi akan lambat karena ribuan file)
- Atau minta RumahWeb support install composer dependencies

### 3. Set Permissions:
```bash
chmod -R 755 storage
chmod -R 755 bootstrap/cache
```

### 4. Cache Config (Jika Ada Terminal):
```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

### 5. Create Database di cPanel:
- Database Name: `samf9781_sbi`
- Username: `samf9781_sbiuser`
- Password: Buat password kuat
- Add user to database dengan ALL PRIVILEGES

### 6. Run Migrations (Jika Ada Terminal):
```bash
php artisan migrate --force
```

**Jika TIDAK ada Terminal:**
- Export database dari lokal via phpMyAdmin
- Import ke cPanel phpMyAdmin

### 7. Ubah Document Root:
Di cPanel Domains, ubah Document Root ke:
```
/public_html/public
```

### 8. Install SSL Certificate:
Di cPanel, buka "SSL/TLS Status" atau "Let's Encrypt", install SSL untuk `samuderabiru.net`

---

## ✅ CHECKLIST SEBELUM ZIP:

- [ ] `npm run build` sudah dijalankan
- [ ] Folder `public/build` sudah ada dan berisi file CSS/JS
- [ ] File `.env` sudah disesuaikan (APP_ENV=production, APP_DEBUG=false)
- [ ] Folder `node_modules` dihapus
- [ ] Folder `vendor` dihapus (atau siapkan untuk upload terpisah)
- [ ] File `test_newsletter.php` dihapus (opsional)
- [ ] File log di `storage/logs/` dikosongkan

---

## 🚀 SIAP UNTUK DI-ZIP!

Setelah checklist di atas selesai, zip semua file dan upload ke cPanel!

**Nama file zip yang disarankan:** `SBIWebsite.zip`

---

Generated: December 5, 2025
Next Step: ZIP & Upload to /public_html
