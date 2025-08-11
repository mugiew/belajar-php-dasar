<?php
/**
 * Contoh sederhana penggunaan expression di PHP.
 * Semua baris di bawah ini menghasilkan nilai (value) yang dapat
 * dipakai kembali dalam kode.
 */

/* ---------- Literal Expression ---------- */
// Nilai tetap 5 – literal expression
$nilaiA = 5;

/* ---------- Variabel sebagai Expression ---------- */
// $nilaiA sudah berupa nilai (5), sehingga $nilaiB menjadi expression
$nilaiB = $nilaiA;

/* ---------- Function Expression (Complex) ---------- */
/**
 * Mengembalikan sebuah integer.
 * Karena fungsi mengembalikan nilai, pemanggilan fungsi adalah expression.
 *
 * @return int
 */
function getNilai(): int
{
    return 100;
}

// Pemanggilan fungsi – expression yang menghasilkan 100
$nilaiC = getNilai();

/* ---------- Contoh Penggunaan Expression dalam Logika ---------- */
/**
 * Menghitung total harga setelah diskon.
 *
 * @param int $harga   Harga satuan
 * @param int $jumlah  Jumlah barang
 * @param int $diskonPersen Diskon dalam persen (default 0)
 * @return float
 */
function hitungTotal(int $harga, int $jumlah, int $diskonPersen = 0): float
{
    // ($harga * $jumlah) → subtotal (expression)
    $subtotal = $harga * $jumlah;

    // ($subtotal * ($diskonPersen / 100)) → nilai diskon (expression)
    $diskon = $subtotal * ($diskonPersen / 100);

    // subtotal - diskon → total yang dikembalikan (expression akhir)
    return $subtotal - $diskon;
}

// Contoh pemanggilan
$totalBayar = hitungTotal(15000, 3, 10); // hasil: 40500
