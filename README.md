# Team Wisnu

## Konfigurasi

Copy `env` ke `.env` dan ubah settingan database.

## Setup Awal
**Jangan lupa aktifkan xampp untuk phpmyadmin!** lalu ketikkan perintah dibawah
```
php spark migrate               // Menjalankan migrasi database
php spark migrate:refresh       // Mengupdate migrasi database (Data Hilang)
php spark db:seed TestSeeder    // Menjalankan seeder
```
## Running Aplikasi
 
```
php spark serve
```

## User Credential
- Super Admin
```
sa@email.com
123
```

- Admin
```
test@email.com
123
```

- Customer
```
customer@email.com
123
```