<?php

/**
 * Contoh penggunaan Else If Statement di PHP
 *
 * Digunakan saat kita ingin mengecek beberapa kondisi secara berurutan.
 * PHP mendukung dua cara penulisan: "else if" (dipisah) dan "elseif" (digabung).
 * Rekomendasinya? Gunakan yang **digabung** (elseif) biar lebih konsisten & clean.
 */

declare(strict_types=1);

/**
 * Konstanta batas nilai & kehadiran.
 */
const MIN_A = 80;
const MIN_B = 70;
const MIN_C = 60;

/**
 * Mengembalikan peringkat berdasarkan nilai dan absen.
 *
 * @param int $nilai  Nilai akademik (0–100)
 * @param int $absen Persentase kehadiran (0–100)
 *
 * @return string Emoji + peringkat atau pesan tidak lulus
 */
function getGrade(int $nilai, int $absen): string
{
    // Menggunakan match (PHP 8+) untuk menggantikan elseif berulang
    return match (true) {
        $nilai >= MIN_A && $absen >= MIN_A => '🏆 Nilai Anda A',
        $nilai >= MIN_B && $absen >= MIN_B => '🥈 Nilai Anda B',
        $nilai >= MIN_C && $absen >= MIN_C => '🥉 Nilai Anda C',
        default => '❌ Anda Tidak Lulus',
    };
}

/**
 * Menampilkan hasil secara konsisten.
 *
 * @param string $message Hasil peringkat
 */
function displayResult(string $message): void
{
    echo $message . PHP_EOL;
}

/* ---------- Contoh Penggunaan ---------- */
$nilai = 75; // contoh nilai siswa
$absen = 85; // contoh persentase kehadiran

$message = getGrade($nilai, $absen);
displayResult($message);

/**
 * Sintaks Alternatif (colon)
 *
 * Selain menggunakan {} (kurung kurawal), PHP juga menyediakan syntax alternatif untuk menggunakan if, yaitu dengan menggunakan : (titik dua).
 * Namun untuk menggunakan ini, kita harus menggunakan kata kunci endif diakhir if statement.
 */

if ($nilai >= MIN_A && $absen >= MIN_A):
    echo '🏆 Nilai Anda A' . PHP_EOL;
elseif ($nilai >= MIN_B && $absen >= MIN_B):
    echo '🥈 Nilai Anda B' . PHP_EOL;
elseif ($nilai >= MIN_C && $absen >= MIN_C):
    echo '🥉 Nilai Anda C' . PHP_EOL;
else:
    echo '❌ Anda Tidak Lulus' . PHP_EOL;
endif;
