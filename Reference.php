<?php

/**
 * ==========================================
 * 🔁 MENGENAL REFERENCE DI PHP
 * ==========================================
 *
 * Biasanya kalau kita assign variable ke variable lain, PHP akan duplikat nilainya (copy).
 * Tapi dengan **reference (&)** kita bisa bikin dua variabel yang menunjuk ke lokasi memory yang sama.
 *
 * 🧠 Analogi Receh:
 * Bayangin kamu punya dua remote TV yang kontrol TV yang sama. Kalau remote A ganti channel, remote B juga akan ngaruh.
 *
 * Ini disebut **pass-by-reference**.
 */

echo "======= ASSIGNMENT BIASA (COPY NILAI) =======\n";

$a = 'Mugiew';
$b = $a; // Copy isi $a ke $b

$b = 'Budi'; // Ubah $b

echo "\$a = $a\n"; // Mugiew
echo "\$b = $b\n"; // Budi

echo "\n======= ASSIGNMENT DENGAN REFERENCE (&) =======\n";

$x = 'PHP';
$y = &$x; // $y dan $x jadi satu hati ❤️ alias satu alamat memory

$y = 'Laravel'; // Ubah $y juga ngaruh ke $x

echo "\$x = $x\n"; // Laravel
echo "\$y = $y\n"; // Laravel

echo "\n======= FUNCTION: PASS BY VALUE VS BY REFERENCE =======\n";

function ubahNama($nama)
{
    $nama = 'Sudah diubah!';
    echo "Dalam function (value): $nama\n";
}

$nama1 = 'Mugi';
ubahNama($nama1);
echo "Setelah function (value): $nama1\n"; // Tetap "Mugi"

function ubahNamaRef(&$nama)
{
    $nama = 'Sudah diubah lewat reference!';
    echo "Dalam function (reference): $nama\n";
}

$nama2 = 'Mugi';
ubahNamaRef($nama2);
echo "Setelah function (reference): $nama2\n"; // Berubah jadi "Sudah diubah lewat reference!"

/**
 * ==========================================
 * 📌 CATATAN PENTING
 * ==========================================
 * - Reference pakai simbol & (dan bukan endapan kenangan)
 * - Biasanya digunakan kalau ingin:
 *   ✅ Menghemat memory
 *   ✅ Ubah data langsung dari function
 *   ✅ Sharing data antara variable/function
 * - Hati-hati: terlalu banyak reference bisa bikin kode sulit dilacak!
 *
 * 💡 Gunakan dengan bijak. Jangan semua dikasih reference, nanti kayak mantan yang gak move on-move on 🤣
 */
