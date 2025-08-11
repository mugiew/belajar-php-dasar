<?php

/**
 * =======================================
 * 📁 Belajar Require dan Include di PHP
 * =======================================
 *
 * 🧠 Tujuan: Memahami cara menggunakan include/require untuk memanggil file lain di PHP.
 * Kenapa penting? Biar kode kamu gak kayak warteg — semua numpuk di satu tempat 😅
 *
 * 📌 Bedanya include vs require?
 * - include       ➜ Kalau file-nya gak ada, PHP kasih peringatan tapi program tetap lanjut.
 * - require       ➜ Kalau file-nya gak ada, PHP langsung ngamuk dan stop total 😱
 *
 * 📌 Gunakan *_once untuk mencegah file dipanggil berkali-kali.
 * - include_once  ➜ Hanya include file kalau belum pernah di-include sebelumnya.
 * - require_once  ➜ Sama seperti require, tapi lebih sopan dan gak duplikat.
 */

// ✅ Contoh: Memanggil file eksternal pakai include
include_once __DIR__ . '/files/MyFunction.php';

// 🗣️ Memanggil function dari file yang sudah di-include
echo sayHello('Mugiew', 'Galeano');

/**
 * =======================================
 * ⚠️ Tips Posisi Include / Require
 * =======================================
 * PHP dibaca dari atas ke bawah.
 * Jadi pastikan include/require ditaruh SEBELUM kamu manggil function atau variabel dari file tersebut.
 *
 * Contoh Salah:
 *     echo sayHello();       ← Error: function belum didefinisikan
 *     include 'MyFunction.php';
 *
 * Contoh Benar:
 *     include 'MyFunction.php';
 *     echo sayHello();       ← Aman, sudah terdefinisi
 *
 */
