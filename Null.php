<?php
/**
 * 🔍 Demonstrasi Lengkap NULL di PHP
 * ----------------------------------
 * ✅ Penetapan NULL
 * ✅ Pemeriksaan: is_null(), isset(), empty()
 * ✅ Penghapusan variabel (unset)
 * ✅ Null Coalescing Operator (??)
 * ✅ Nullable Type Declarations (PHP 7.1+)
 * ✅ Union Types (PHP 8.0+)
 * ✅ PHP 8.4+ nullable function best practice
 */

/*-------------------------------------------------
 | 1️⃣ Penetapan NULL
 |-----------------------------------------------
 | NULL = tidak ada nilai sama sekali.
 | Berguna untuk mereset variabel tanpa menghapusnya.
 -------------------------------------------------*/
$name = 'Mugiew';
$name = null;

$age = null; // deklarasi langsung null


/*-------------------------------------------------
 | 2️⃣ Pemeriksaan NULL
 |-----------------------------------------------
 | 3 function penting:
 | - is_null($var) → true jika memang null
 | - isset($var)  → true jika variabel ada & tidak null
 | - empty($var)  → true jika "kosong" (null, 0, "", [], dll)
 -------------------------------------------------*/
var_dump(is_null($name));    // true
var_dump(isset($name));      // false
var_dump(empty($name));      // true


/*-------------------------------------------------
 | 3️⃣ Menghapus variabel dengan unset()
 |-----------------------------------------------
 | Hapus total dari memori. Akses setelah unset = error/notice.
 -------------------------------------------------*/
$value = 'Mugiew';
unset($value);

var_dump(isset($value));     // false
// var_dump(is_null($value)); // ❌ WARNING: variabel sudah tidak ada


/*-------------------------------------------------
 | 4️⃣ Null Coalescing Operator (??) – PHP 7+
 |-----------------------------------------------
 | Berguna buat kasih nilai default kalau null / gak ada
 -------------------------------------------------*/
$username = $_GET['user'] ?? 'guest'; // aman dari undefined index


/*-------------------------------------------------
 | 5️⃣ Nullable Type Declarations – PHP 7.1+
 |-----------------------------------------------
 | Tipe data bisa null? Tambahin tanda tanya: ?tipe
 -------------------------------------------------*/
function getUser(?string $id): ?User {
    if ($id === null) {
        return null;
    }

    return new User($id); // misalnya ambil dari DB
}


/*-------------------------------------------------
 | 6️⃣ Union Types + Nullable – PHP 8.0+
 |-----------------------------------------------
 | Multiple type return & parameter (tipe | tipe)
 -------------------------------------------------*/
function calculate(int|float $a, int|float $b): int|float|null {
    $result = $a + $b;
    return $result > 0 ? $result : null;
}


/*-------------------------------------------------
 | 7️⃣ Nullable di PHP 8.4+ (Penulisan eksplisit)
 |-----------------------------------------------
 | PHP makin ketat: nullable harus dideklarasikan jelas.
 -------------------------------------------------*/
function foo(?string $name = null): void {
    echo $name ?? 'Anonymous';
}
