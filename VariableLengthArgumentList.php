<?php

/**
 * ================================
 * VARIABLE-LENGTH ARGUMENT LIST
 * ================================
 *
 * Fitur ini memungkinkan kita mengirim banyak nilai ke dalam satu parameter fungsi.
 *
 * ✅ Gunakan tanda `...` (splat operator) di parameter terakhir
 * ✅ Otomatis jadi array di dalam fungsi
 * ✅ Bisa dipanggil langsung dengan banyak argumen
 * ✅ Bisa juga dipanggil dengan array, asal pakai `...` juga
 *
 * Anggap aja kayak kotak paket isi mie instan:
 * - Normal: satu bungkus satu kali
 * - Splat: bisa langsung kirim sekardus mie 🥴
 */

// Fungsi penjumlahan semua angka
function sumAll(...$values)
{
    // $values = array dari semua argumen yang dilempar ke fungsi
    $total = 0;

    foreach ($values as $value) {
        $total += $value;
    }

    // Tampilkan penjumlahan secara manusiawi
    echo 'Total dari ' . implode(' + ', $values) . " = $total" . PHP_EOL;
}

// Contoh: langsung kirim beberapa angka
sumAll(10, 20, 30, 40);
// Output: Total dari 10 + 20 + 30 + 40 = 100

// Contoh: kirim array, tapi dibuka dulu pake "..."
$arrayAngka = [5, 15, 25];
sumAll(...$arrayAngka);
// Output: Total dari 5 + 15 + 25 = 45
