<?php
/**
 * ===========================================
 * Tipe Data Array di PHP
 * ===========================================
 * - Array = struktur data untuk menyimpan banyak nilai
 * - Di PHP, array bersifat fleksibel (dinamis)
 * - Bisa menampung data berbagai tipe: string, int, bool, bahkan array lain!
 */

// Array Numerik (indexed array)
$values = [1, 2, 3, 4]; // Sama dengan array(1, 2, 3, 4)
var_dump($values); // Output semua elemen

// Array String
$names = ['Mugiew', 'Galeano'];
var_dump($names);

/*-------------------------------------------------
 | 🛠️ Operasi Dasar Array
 -------------------------------------------------*/

// 1️⃣ Akses data berdasarkan index (mulai dari 0)
var_dump($names[0]); // Output: Mugiew

// 2️⃣ Ubah data di index tertentu
$names[0] = 'Budi';
var_dump($names); // Sekarang index 0 jadi 'Budi'

// 3️⃣ Hapus elemen array
unset($names[1]); // Hapus index 1 ('Galeano')
var_dump($names); // Sekarang hanya ada 1 elemen

// 4️⃣ Tambah data ke posisi paling belakang
$names[] = 'Agus';
var_dump($names); // Sekarang ada 'Budi' dan 'Agus'

// 5️⃣ Hitung jumlah elemen array
var_dump(count($names)); // Output: 2
