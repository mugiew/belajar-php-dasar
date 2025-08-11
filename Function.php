<?php
/**
 * ============================
 * FUNGSI / FUNCTION DI PHP
 * ============================
 *
 * 1. Membuat function
 * 2. Lokasi function
 * 3. Function dengan argumen
 * 4. Default argument value
 * 5. Kesalahan umum: urutan parameter
 * 6. Fungsi anonim (closure)
 * 7. Demo – mengeksekusi semua contoh sekaligus
 */

/* -------------------------------------------------
 * 1. MEMBUAT FUNCTION
 * ------------------------------------------------- */
function sayHello(): void
{
    echo 'Hello Mr. Mugi Ganteng Maximal!' . PHP_EOL;
}

/* -------------------------------------------------
 * 2. LOKASI FUNCTION
 * ------------------------------------------------- */
$buat = false;
if ($buat) {
    function hi(): void
    {
        echo 'Hi Tampan!' . PHP_EOL;
    }
}

/* -------------------------------------------------
 * 3. FUNCTION DENGAN ARGUMEN
 * ------------------------------------------------- */
function sayHelloName(string $name): void
{
    echo "Hello $name" . PHP_EOL;
}

/* -------------------------------------------------
 * 4. DEFAULT ARGUMENT VALUE
 * ------------------------------------------------- */
function sayHelloDefault(string $name = 'Mugi'): void
{
    echo "Hello $name" . PHP_EOL;
}

/* -------------------------------------------------
 * 5. URUTAN PARAMETER (wajib dulu, default belakangan)
 * ------------------------------------------------- */
function sayFullName(string $first, string $last = 'Anon'): void
{
    echo "Hello $first $last" . PHP_EOL;
}

/* -------------------------------------------------
 * 6. FUNGSI ANONIM (CLOSURE)
 * ------------------------------------------------- */
// Pilihan A: variabel $prefix dideklarasikan di luar closure
$prefix = 'Hai';
$greeting = function (string $name) use ($prefix): string {
    return "$prefix $name!";
};

/* // Pilihan B: menggunakan parameter default (jika tidak ingin memakai $prefix di luar)
// $greeting = function (string $name, string $prefix = 'Hai'): string {
//     return "$prefix $name!";
// };
 */

/* -------------------------------------------------
 * 7. DEMO – mengeksekusi semua contoh sekaligus
 * ------------------------------------------------- */
function runDemo(): void
{
    global $greeting;

    echo "=== Demo Fungsi PHP ===\n";

    // 1. Function sederhana
    sayHello();

    // 2. Function dengan argumen
    sayHelloName('Mugiew');

    // 3. Default argument
    sayHelloDefault(); // menggunakan nilai default
    sayHelloDefault('Galeano'); // override default

    // 4. Contoh fungsi dengan tipe data return
    echo '4² = ' . square(4) . "\n";
    echo "'5'² = " . square(5) . " (string otomatis dikonversi)\n";

    // 5. Urutan parameter yang benar
    sayFullName('Budi'); // Budi Anon
    sayFullName('Mugi', 'Setia'); // Mugi Setia

    // 6. Anonymous function (closure) – sudah dideklarasikan di luar
    echo $greeting('Andi') . "\n";

    echo "=== Akhir Demo ===\n";
}

/* -------------------------------------------------
 * 8. FUNCTION DENGAN TYPE DECLARATION (contoh tambahan)
 * ------------------------------------------------- */
function square(int $number): int
{
    // PHP akan otomatis meng‑cast string yang berisi angka menjadi integer
    return $number * $number;
}

/* -------------------------------------------------
 * 9. EKSEKUSI DEMO
 * ------------------------------------------------- */
runDemo();
