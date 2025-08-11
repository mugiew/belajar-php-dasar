<?php
/**
 * =========================================================
 *  FUNCTION PRACTICE – REFAKTOR UNTUK PEMULA
 * =========================================================
 *
 *  • Semua fungsi dideklarasikan di awal file.
 *  • Dokumentasi dengan PHPDoc.
 *  • Tipe data ketat (type hinting) + nilai kembali (return type).
 *  • Contoh penggunaan terpusat pada fungsi runDemo().
 */

/* ==============================
 * 1. Fungsi sederhana
 * ============================== */
 /**
  * Menampilkan salam umum.
  *
  * @return void
  */
function sayHello(): void
{
    echo "Hello Mr. Mugi Ganteng Maximal!\n";
}

/* ==============================
 * 2. Fungsi dengan parameter
 * ============================== */
 /**
  * Menyapa seseorang dengan nama yang diberikan.
  *
  * @param string $name Nama yang akan disapa
  * @return void
  */
function sayHelloName(string $name): void
{
    echo "Hello $name\n";
}

/* ==============================
 * 3. Fungsi dengan nilai default
 * ============================== */
 /**
  * Menyapa dengan nama default bila tidak ada argumen.
  *
  * @param string $name Nama (default: 'Mugi')
  * @return void
  */
function sayHelloDefault(string $name = 'Mugi'): void
{
    echo "Hello $name\n";
}

/* ==============================
 * 4. Fungsi dengan return value
 * ============================== */
 /**
  * Menghitung kuadrat dari sebuah bilangan bulat.
  *
  * @param int $number Bilangan yang akan dikuadratkan
  * @return int Hasil kuadrat
  */
function square(int $number): int
{
    return $number * $number;
}

/* ==============================
 * 5. Fungsi dengan urutan parameter yang benar
 * ============================== */
 /**
  * Menyapa dengan nama depan dan belakang.
  * Parameter wajib diletakkan dulu, yang optional di belakang.
  *
  * @param string $first Nama depan (wajib)
  * @param string $last  Nama belakang (opsional, default: 'Anon')
  * @return void
  */
function sayFullName(string $first, string $last = 'Anon'): void
{
    echo "Hello $first $last\n";
}

/* ==============================
 * 6. Fungsi anonim (closure) – contoh callback sederhana
 * ============================== */
$greeting = function (string $name) use ($prefix = 'Hai'): string {
    return "$prefix $name!";
};

/* ==============================
 * 7. Demo – mengeksekusi semua contoh sekaligus
 * ============================== */
 /**
  * Menjalankan semua contoh fungsi di atas.
  *
  * @return void
  */
function runDemo(): void
{
    echo "=== Demo Fungsi PHP ===\n";

    sayHello();
    sayHelloName('Mugiew');
    sayHelloDefault();               // menggunakan default
    sayHelloDefault('Galeano');      // override default

    echo "4² = " . square(4) . "\n";
    echo "'5'² = " . square(5) . " (string otomatis dikonversi)\n";

    sayFullName('Budi');                     // Budi Anon
    sayFullName('Mugi', 'Setia');            // Mugi Setia

    // Anonymous function
    echo $greeting('Andi') . "\n";

    echo "=== Akhir Demo ===\n";
}

/* ==============================
 * Eksekusi demo hanya bila file dijalankan langsung
 * ============================== */
if (php_sapi_name() === 'cli' || !empty($_SERVER['SCRIPT_FILENAME'])) {
    runDemo();
}
