# Payment Gateway Integration Guide

## Midtrans Setup

Sistem pembayaran ini menggunakan **Midtrans** sebagai payment gateway. Ikuti langkah-langkah di bawah untuk mengintegrasikan Midtrans.

### 1. Install Midtrans Library

```bash
composer require midtrans/midtrans-php
```

### 2. Konfigurasi Environment Variables

Tambahkan konfigurasi Midtrans ke file `.env`:

```env
MIDTRANS_SERVER_KEY=your_server_key_here
MIDTRANS_CLIENT_KEY=your_client_key_here
MIDTRANS_IS_PRODUCTION=false
```

### 3. Dapatkan Keys dari Midtrans

1. Buat akun di [Midtrans Dashboard](https://dashboard.midtrans.com)
2. Login ke dashboard
3. Pergi ke menu **Settings → Access Keys**
4. Copy **Server Key** dan **Client Key**
5. Paste ke file `.env`

### 4. Dokumentasi

- **File Konfigurasi**: `config/midtrans.php`
- **Controller**: `app/Http/Controllers/CheckoutController.php`
- **Routes**: `routes/web.php` (prefix `/checkout`)
- **Views**: 
  - `resources/views/checkout-new.blade.php` - Form checkout
  - `resources/views/checkout-success.blade.php` - Success page

### 5. Payment Methods

Sistem mendukung:
- ✓ GoPay / QRIS
- ✓ Virtual Account (BNI, BRI, Mandiri)
- ✓ Kartu Debit/Kredit
- ✓ Link Aja
- ✓ Indomaret / Alfamart

### 6. Routes

```
GET  /checkout/{id}              - Tampilkan form checkout
POST /checkout                   - Process pembayaran
GET  /checkout/finish            - Callback dari Midtrans
GET  /checkout/success/{orderId} - Halaman sukses
```

### 7. Testing

Untuk testing, gunakan kartu test Midtrans:
- Nomor Kartu: `4811 1111 1111 1114`
- Ekspirasi: `12/25`
- CVV: `123`

### 8. Production Ready

Sebelum go live:
- Set `MIDTRANS_IS_PRODUCTION=true` di `.env`
- Update Server Key dan Client Key dengan production keys
- Setup email notification untuk customer
- Implementasikan database models untuk transactions dan orders

## File Struktur yang Dibuat

```
app/Http/Controllers/
├── CheckoutController.php          (NEW)

config/
├── midtrans.php                    (NEW)

resources/views/
├── checkout-new.blade.php          (NEW)
├── checkout-success.blade.php      (NEW)
```

## API Integration

### Server-side Flow

```
1. User fills checkout form
2. Send POST request to /checkout
3. Controller generates Snap Token via Midtrans API
4. Return JSON response with snap_token
5. Frontend embeds token ke Midtrans Snap
6. Customer completes payment
7. Midtrans redirects to /checkout/finish
8. Create order record & send email
9. Redirect to success page
```

### Midtrans Events

- `onSuccess` - Pembayaran berhasil
- `onPending` - Pembayaran pending
- `onError` - Error pembayaran
- `onClose` - User menutup payment dialog

## Troubleshooting

### Issue: "Snap script not loaded"
- Pastikan internet connection aktif
- Reload page dan coba lagi

### Issue: "Client key not found"
- Pastikan `MIDTRANS_CLIENT_KEY` sudah di `.env`
- Jalankan `php artisan config:cache`

### Issue: "Payment gateway error"
- Check logs di `storage/logs/laravel.log`
- Pastikan server key valid
- Verifikasi environment variables

