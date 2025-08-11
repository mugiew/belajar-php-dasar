<?php

/**
 * =======================================
 * 🧠 PEMAHAMAN VARIABLE SCOPE DI PHP
 * =======================================
 *
 * Variable scope = ruang lingkup di mana sebuah variabel bisa diakses.
 * PHP punya 3 jenis scope utama:
 *
 * 1️⃣ Global Scope      - Variabel yang dibuat di luar function
 * 2️⃣ Local Scope       - Variabel yang dibuat di dalam function
 * 3️⃣ Static Scope      - Variabel lokal yang tetap menyimpan nilainya walau function selesai
 *
 * Yuk kita bahas satu-satu biar gak kayak mantan yang belum move on 🥲
 */

echo "======= GLOBAL SCOPE =======\n";

// 1️⃣ Global Scope
$nama = 'Mugiew'; // Variabel global

function tampilNama()
{
    // echo $nama; // ❌ Error: $nama gak dikenal di sini
    global $nama; // ✅ Pakai 'global' biar variabel luar bisa diakses
    echo "Halo $nama dari dalam function!\n";
}

tampilNama();

echo "\n======= LOCAL SCOPE =======\n";

// 2️⃣ Local Scope
function hitungUmur()
{
    $umur = 17; // Variabel lokal, cuma bisa diakses dalam function ini
    echo "Umur saya adalah $umur tahun\n";
}

hitungUmur();
// echo $umur; // ❌ Error: $umur gak dikenal di luar function

echo "\n======= STATIC SCOPE =======\n";

// 3️⃣ Static Scope
function hitungKunjungan()
{
    static $jumlah = 0; // 🔒 Static, jadi nilainya nempel terus
    $jumlah++;
    echo "Kunjungan ke-$jumlah\n";
}

hitungKunjungan(); // 1
hitungKunjungan(); // 2
hitungKunjungan(); // 3

/**
 * =======================================
 * 📌 Catatan Tambahan Buat Anak Didik:
 * =======================================
 * - Variabel di luar function = global
 * - Variabel di dalam function = local
 * - Pakai `global` keyword kalau mau akses variabel luar dari dalam function
 * - Pakai `static` kalau butuh nilai variabel lokal tetap nyimpen statusnya
 *
 * 💡 Tips: Jangan asal bikin semua variabel global ya! Nanti kacau kayak benang kusut!
 */
