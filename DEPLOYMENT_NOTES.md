# Deployment Notes - SBI Website

## Changes Made for Production Deployment

### 1. Environment Configuration (.env)
- `APP_ENV`: Changed from `local` to `production`
- `APP_DEBUG`: Changed from `true` to `false` (IMPORTANT: Hides error details from users)
- `APP_URL`: Changed from `http://localhost` to `https://samuderabiru.net`
- `APP_NAME`: Changed to "Samudera Biru International"
- `LOG_LEVEL`: Changed from `debug` to `error` (Only log errors in production)

### 2. Database Configuration
- `DB_HOST`: Changed from `127.0.0.1` to `localhost`
- `DB_DATABASE`: Set to `samf9781_sbi` (create this in cPanel)
- `DB_USERNAME`: Set to `samf9781_sbiuser` (create this in cPanel)
- `DB_PASSWORD`: **MUST BE FILLED** after creating database user in cPanel

### 3. Mail Configuration
- `MAIL_MAILER`: Changed from `log` to `smtp`
- `MAIL_HOST`: Set to `smtp.gmail.com`
- `MAIL_PORT`: Set to `587`
- `MAIL_SCHEME`: Set to `tls`
- `MAIL_FROM_ADDRESS`: Set to `noreply@samuderabiru.net`
- **IMPORTANT**: Fill `MAIL_USERNAME` and `MAIL_PASSWORD` with actual Gmail credentials or use hosting SMTP

---

## Deployment Checklist

### BEFORE Upload:
- [x] .env configured for production
- [ ] Build assets: `npm run build`
- [ ] Delete folders: `node_modules`, `vendor`, `.git`
- [ ] Zip project files

### AFTER Upload to cPanel:
1. [ ] Extract zip in `/public_html`
2. [ ] Change Document Root to `/public_html/public`
3. [ ] Create MySQL Database: `samf9781_sbi`
4. [ ] Create Database User: `samf9781_sbiuser`
5. [ ] Update .env with database password
6. [ ] Set folder permissions:
   - `chmod -R 755 storage`
   - `chmod -R 755 bootstrap/cache`
7. [ ] Install Composer dependencies (if Terminal available):
   - `cd /home/samf9781/public_html`
   - `composer install --no-dev --optimize-autoloader`
8. [ ] Run migrations (if Terminal available):
   - `php artisan migrate --force`
9. [ ] Cache config:
   - `php artisan config:cache`
   - `php artisan route:cache`
   - `php artisan view:cache`
10. [ ] Install SSL Certificate (Let's Encrypt in cPanel)
11. [ ] Test website: https://samuderabiru.net

---

## Important Files Location After Upload

```
/home/samf9781/public_html/
├── app/
├── bootstrap/
│   └── cache/          <- Needs 755 permission
├── config/
├── database/
│   └── migrations/
├── public/             <- Document Root should point here
│   ├── .htaccess       <- Already configured
│   ├── index.php
│   └── build/          <- Vite build output (create with npm run build)
├── resources/
├── routes/
├── storage/            <- Needs 755 permission
├── .env                <- Update database password here
├── artisan
└── composer.json
```

---

## After Deployment Settings

### Update .env on Server:
```env
DB_PASSWORD=your_actual_database_password_from_cpanel
MAIL_USERNAME=your_email@gmail.com
MAIL_PASSWORD=your_gmail_app_password
```

### If Contact Form Not Working:
- Check mail configuration in .env
- Use Gmail App Password (not regular password)
- Or use RumahWeb SMTP settings (ask support)

---

## Troubleshooting

### 500 Internal Server Error:
- Check .env APP_KEY is set
- Check storage and bootstrap/cache permissions (755)
- Check .htaccess exists in public folder
- Enable debug temporarily: `APP_DEBUG=true` (then disable after fixing)

### Database Connection Error:
- Verify database name, username, password in .env
- Verify user has been added to database with ALL PRIVILEGES

### Assets Not Loading:
- Verify Document Root points to `/public_html/public`
- Run `npm run build` locally and upload public/build folder
- Check APP_URL in .env matches domain

---

## Contact Form Email Settings

For Gmail SMTP:
1. Enable 2-Step Verification in Google Account
2. Generate App Password: https://myaccount.google.com/apppasswords
3. Use App Password in MAIL_PASSWORD (not regular password)

For RumahWeb SMTP (recommended):
- Contact RumahWeb support for SMTP settings
- Usually: smtp.rumahweb.com with your hosting email

---

## DNS Settings (Already Done)

✅ A Record: `@` → `103.247.9.165`
✅ CNAME: `www` → `samuderabiru.net`

DNS Propagation: 1-24 hours
Check: https://dnschecker.org

---

## Security Reminders

- ✅ APP_DEBUG=false (Never enable in production)
- ✅ .env file is hidden (not accessible from web)
- ✅ Document Root points to /public folder only
- [ ] Change default database passwords
- [ ] Setup regular backups in cPanel
- [ ] Enable SSL certificate
- [ ] Setup firewall rules (if available)

---

Generated: December 5, 2025
Domain: samuderabiru.net
Hosting: RumahWeb (cPanel)
IP: 103.247.9.165
