<?php
declare(strict_types=1); // Aktifkan pengecekan tipe yang ketat

/**
 * Contoh sederhana penggunaan statement dan expression di PHP.
 *
 * Statement = baris kode lengkap yang dieksekusi (diakhiri dengan ';')
 * Expression = bagian kode yang menghasilkan nilai.
 */

/* ---------- 1. Statement: Menetapkan dan menampilkan sebuah string ---------- */
$fullName = 'Mugiew Galeano'; // Assignment expression (menghasilkan nilai string)
echo $fullName; // Output statement (menampilkan nilai)

/* ---------- 2. Statement: Membuat objek DateTime ---------- */
$currentDate = new DateTime(); // New expression (mengembalikan instance DateTime)
echo $currentDate->format('Y-m-d H:i:s'); // Menampilkan tanggal & waktu saat ini
