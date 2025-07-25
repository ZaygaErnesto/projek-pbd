TIM : Muhammad Zayga Ernesto 23.11.5563
      Rizqi Zulmiazta Albar	 23.11.5543
  

# Projek Gudang Barang Laravel

## Persyaratan
- PHP >= 8.1
- Composer
- MySQL/MariaDB
- Node.js & npm (opsional, untuk asset frontend)
- Web server (Apache/Nginx) atau gunakan `php artisan serve`

## Langkah Instalasi

1. **Clone repository**
   ```
   git clone <url-repo-anda>
   cd projek-pbd
   ```

2. **Install dependency PHP**
   ```
   composer install
   ```

3. **Copy file environment**
   ```
   cp .env.example .env
   ```

4. **Atur konfigurasi database di file `.env`**
   ```
   DB_DATABASE=gudang_barang
   DB_USERNAME=root
   DB_PASSWORD= (isi sesuai password MySQL Anda)
   ```

5. **Import database**
   - Import file `gudang_barang_final_with_all_relationships.sql` ke MySQL menggunakan phpMyAdmin atau command line.

6. **Generate application key**
   ```
   php artisan key:generate
   ```

7. **(Opsional) Install dependency frontend**
   ```
   npm install
   npm run dev
   ```

8. **Jalankan server**
   ```
   php artisan serve
   ```
   Akses di [http://127.0.0.1:8000](http://127.0.0.1:8000)

## Akun Default
- Silakan buat akun admin/user melalui fitur aplikasi jika belum ada.

## Catatan
- Pastikan tabel-tabel database sudah sesuai struktur SQL yang disediakan.
- Jika ada error terkait kolom `created_at`/`updated_at`, pastikan model terkait sudah menonaktifkan timestamps (`public $timestamps = false;`).
- Untuk fitur stock in/out, stok barang akan otomatis bertambah/berkurang.

---
