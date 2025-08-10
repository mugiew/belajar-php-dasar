<?php
/* -------------------------------------------------
 *  CONSTANT IN PHP
 * -------------------------------------------------
 *  • Tidak dapat diubah setelah dideklarasikan
 *  • Nama disarankan menggunakan UPPER_CASE
 * ------------------------------------------------- */

/* 1. Membuat constant dengan define() */
define('AUTHOR', 'Mugiew Galeano');   // string
define('APP_VERSION', 1);             // integer
define('MAX_USERS', 1000);            // contoh integer lain

/* 2. Membuat constant dengan keyword const (lebih cepat & dapat di‑use di dalam class) */
const SITE_NAME = 'MyAwesomeSite';
const ENABLE_DEBUG = true;

/* 3. Magic constants (nilai otomatis tergantung konteks) */
$path = __DIR__ . '/config.php';   // folder file ini
$line = __LINE__;                  // nomor baris saat ini

/* 4. Constant array (PHP 7.0+ dengan const, atau define() sejak PHP 7.0) */
const SUPPORTED_LANGUAGES = ['en', 'id', 'es'];   // menggunakan const
// atau dengan define():
define('ERROR_CODES', [
    100 => 'Continue',
    200 => 'OK',
    404 => 'Not Found',
]);

/* 5. Constant dalam class (visibility dapat diatur) */
class AppConfig {
    public const CACHE_TTL = 3600;          // public, dapat diakses dari luar
    protected const DB_HOST = 'localhost'; // hanya dalam class atau subclass
    private const SECRET_KEY = 's3cr3t';    // hanya dalam class ini
}

/* -------------------------------------------------
 *  MENAMPILKAN CONSTANT
 * ------------------------------------------------- */
echo AUTHOR . PHP_EOL;          // Mugiew Galeano
echo APP_VERSION . PHP_EOL;    // 1
echo SITE_NAME . PHP_EOL;      // MyAwesomeSite
echo __FILE__ . PHP_EOL;       // path lengkap file ini
echo __LINE__ . PHP_EOL;       // contoh nomor baris
print_r(SUPPORTED_LANGUAGES);
