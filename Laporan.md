# JOBSHEET 03

## Nama : Lilla Nur Wahidiyah
## NIM  : 2241720144
## Kelas/Absen : TI 2F / 17

### A. Pengaturan Database

```
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:8Oge/w7e3Ff7DMCG2aWgxENzmIXNTDt7wktjNPwdSNc=
APP_DEBUG=true
APP_URL=http://localhost
```
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```
MIGRATION
```
C:\laragon\www\PWL_POS>php artisan make:migration Level --create=m_level
l    l
   INFO  Migration [C:\laragon\www\PWL_POS\database\migrations/2024_03_01_023718_level.php] created successfully.
```
```
C:\laragon\www\PWL_POS>php artisan make:migration create_m_kategori_table --create=m_kategori

   INFO  Migration [C:\laragon\www\PWL_POS\database\migrations/2024_03_01_025248_create_m_kategori_table.php] created successfully.


C:\laragon\www\PWL_POS>php artisan migrate

   INFO  Running migrations.

  2024_03_01_024826_kategori ........................................................ 23ms DONE
  ```