<?php

/**
 * Contoh penggunaan if-else di PHP.
 *
 * if-else digunakan saat kita ingin menjalankan satu blok kode jika kondisi benar (true),
 * dan blok lain jika kondisi salah (false).
 */

// Contoh Struktur Umum
if ($kondisi) {
    // Blok ini akan dieksekusi jika kondisi bernilai true
} else {
    // Blok ini akan dieksekusi jika kondisi bernilai false
}

// Contoh Kondisi Kompleks
if ($kondisi) {
    // Bisa punya banyak perintah dalam satu blok
    // aksi1();
    // aksi2();
} else {
    // aksiFallback();
}

// Studi Kasus: Penentuan Kelulusan
$nilai = 70;
$absen = 90;

// Cek apakah siswa lulus berdasarkan nilai dan kehadiran
$lulus = $nilai >= 75 && $absen >= 75;

if ($lulus) {
    echo '🎉 Anda Lulus' . PHP_EOL;
} else {
    echo '😢 Anda Tidak Lulus' . PHP_EOL;
}
