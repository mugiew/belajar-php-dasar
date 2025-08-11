<?php

/**
 * SWITCH STATEMENT DI PHP
 *
 * Switch adalah alternatif dari if-else yang cocok digunakan
 * saat kita ingin membandingkan satu variabel dengan banyak nilai.
 * Perbandingan yang digunakan di switch selalu menggunakan `==` (loose comparison).
 */

// Contoh nilai siswa (bisa diganti untuk eksperimen)
$nilai = 'B';

/**
 * Versi switch statement standar.
 * Cocok digunakan jika kondisinya tidak kompleks.
 */
switch ($nilai) {
    case 'A':
        // Jika nilai A, tampilkan pesan lulus dengan sangat baik
        echo 'Anda Lulus dengan sangat baik.' . PHP_EOL;
        break;

    case 'B':
    case 'C':
        // Nilai B atau C dianggap lulus
        echo 'Anda Lulus' . PHP_EOL;
        break;

    case 'D':
        // Nilai D dianggap tidak lulus
        echo 'Anda tidak lulus' . PHP_EOL;
        break;

    default:
        // Nilai selain A, B, C, D akan masuk ke default
        echo 'Mungkin anda salah jurusan' . PHP_EOL;
        break;
}

/**
 * SWITCH STATEMENT DENGAN SYNTAX ALTERNATIF
 *
 * Cocok digunakan di dalam file yang banyak tag HTML-nya (misalnya di view).
 * Mirip seperti alternatif if-else: if ... : ... endif;
 * Perhatikan penutupnya adalah `endswitch;`
 */
switch ($nilai):
    case 'A':
        echo 'Anda Lulus dengan sangat baik.' . PHP_EOL;
        break;

    case 'B':
    case 'C':
        echo 'Anda Lulus' . PHP_EOL;
        break;

    case 'D':
        echo 'Anda tidak lulus' . PHP_EOL;
        break;

    default:
        echo 'Mungkin anda salah jurusan' . PHP_EOL;
        break;
endswitch;
