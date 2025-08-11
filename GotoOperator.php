<?php

/**
 * GOTO OPERATOR DI PHP
 *
 * Operator `goto` memungkinkan program untuk *melompat* langsung ke bagian tertentu dalam kode.
 * Untuk lompat, kita harus membuat **label** sebagai tujuan.
 *
 * Namun, hati-hati ya...
 * Terlalu banyak `goto` bisa membuat kode jadi *membingungkan* seperti benang kusut.
 * Karena itu, `goto` sangat jarang dipakai dalam praktik modern.
 * Tapi nggak apa-apa kita kenalan dulu, biar gak kaget kalau nemu di kode orang.
 */

// --------------------
// Contoh 1: Lompatan Biasa
// --------------------

// Program akan langsung lompat ke label 'a', dan melewati echo pertama
goto a;

echo 'Baris ini akan dilewati karena ada goto' . PHP_EOL; // tidak akan dieksekusi

a:
echo 'Hello dari label A' . PHP_EOL; // yang dieksekusi langsung

/**
 * Contoh penggunaan `goto` untuk keluar dari perulangan
 *
 * Ini contoh ekstrem—bisa dilakukan dengan `break`, tapi hanya untuk menunjukkan bahwa `goto` bisa melompat keluar loop juga.
 */

$counter = 1;

while (true) {
    echo "While loop ke-$counter" . PHP_EOL;
    $counter++;

    // Jika counter lebih dari 10, langsung loncat ke label 'akhir'
    if ($counter > 10) {
        goto akhir;
    }
}

akhir:
echo 'Perulangan selesai. Ini bagian akhir program.' . PHP_EOL;
