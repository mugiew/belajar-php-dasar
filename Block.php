<?php
declare(strict_types=1); // aktifkan strict types untuk keamanan tipe data

/**
 * Menjalankan aplikasi sederhana.
 *
 * Block: kumpulan statement yang dibungkus dalam `{}`.
 * Statement: baris kode lengkap yang dieksekusi (diakhiri dengan `;`).
 *
 * @param string $userName Nama yang akan disapa
 * @return void
 */
function runApp(string $userName): void
{
    // Block dimulai
    echo 'Start Program' . PHP_EOL; // statement: menampilkan teks
    echo 'Hello ' . $userName . PHP_EOL; // statement: menyambut user
    echo 'End Program' . PHP_EOL; // statement: menandakan akhir
    // Block berakhir
}

// Contoh pemanggilan fungsi
$fullName = 'Mugiew Galeano'; // variabel yang lebih deskriptif
runApp($fullName);
