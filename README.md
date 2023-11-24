## Instalasi

Download lalu install dependency dengan perintah:

```
composer install
```
Untuk yang belum menginstall composer, informasi mengenai instalasi dan penggunaan composer dapat diakses [disini](https://github.com/composer/composer).

Buat auth scaffolding dengan perintah:
```
php artisan ui bootstrap --auth
```
Pada bagian `bootstrap` bisa diganti dengan pilihan lainnya seperti vue, react, dll.

Langkah selanjutnya jalankan perintah berikut untuk mengambil dependency dan mengcompile fontend.
```
npm install && npm run dev
```
Pastikan komputer sudah terinstall nodeJS dan npm

## Penggunaan

Isi variabel `KEYCLOAK_CLIENT_ID` di file `.env` dengan client id sso yang diberikan.

Isi variabel `KEYCLOAK_CLIENT_SECRET` di file `.env` dengan client secret sso yang diberikan.

Ganti variabel `KEYCLOAK_CLIENT_URI` di file `.env` dengan url callback di aplikasi, misal https://example.com/login.

Lakukan ujicoba dengan mengakses halaman login.