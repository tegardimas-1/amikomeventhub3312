# Production Environment Setup Guide

## Database Configuration untuk Production

### PostgreSQL (AWS RDS atau hosting lainnya)
Pastikan .env production memiliki:

```
DB_CONNECTION=pgsql
DB_HOST=your-rds-host.aws-southeast-1.rds.amazonaws.com
DB_PORT=5432
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### MySQL (Jika masih menggunakan MySQL)
```
DB_CONNECTION=mysql
DB_HOST=your-mysql-host
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

## Deployment Checklist

- [ ] Update `.env` dengan database credentials yang benar
- [ ] Jalankan `php artisan migrate --force` di server
- [ ] Pastikan `APP_ENV=production` dan `APP_DEBUG=false`
- [ ] Generate APP_KEY jika belum ada: `php artisan key:generate`
- [ ] Clear cache: `php artisan config:clear && php artisan route:clear`
- [ ] Jalankan seeder untuk admin user: `php artisan db:seed --force`

## Credential Admin Default (setelah deploy)
- Email: `admin@amikom.ac.id`
- Password: `password123`

**⚠️ Segera ganti password setelah login pertama!**
