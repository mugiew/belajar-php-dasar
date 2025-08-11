<?php
declare(strict_types=1);

/**
 * Konstanta nilai batas kelulusan.
 */
const MIN_NILAI = 75;
const MIN_ABSEN = 75;

/**
 * Mengecek kelulusan berdasarkan nilai dan kehadiran.
 *
 * @param int $nilai  Nilai akademik (0–100)
 * @param int $absen Persentase kehadiran (0–100)
 *
 * @return bool  true bila lulus, false bila tidak lulus
 */
function isPassed(int $nilai, int $absen): bool
{
    // Menggunakan operator logika AND (&&) yang jelas
    return $nilai >= MIN_NILAI && $absen >= MIN_ABSEN;
}

/**
 * Menampilkan hasil keputusan secara konsisten.
 *
 * @param bool $passed Hasil evaluasi kelulusan
 */
function displayResult(bool $passed): void
{
    // Ternary operator untuk menyingkat output
    $message = $passed ? 'Anda Lulus' : 'Anda Tidak Lulus';
    echo $message . PHP_EOL;
}

/* ---------- Contoh Penggunaan ---------- */
$nilai = 70; // contoh nilai mahasiswa
$absen = 90; // contoh persentase kehadiran

$passed = isPassed($nilai, $absen);
displayResult($passed);
