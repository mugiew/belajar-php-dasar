<?php

/**
 * PERULANGAN / LOOP
 *
 * Loop digunakan saat kita ingin menjalankan sebuah aksi berulang-ulang,
 * tanpa perlu menulis kodenya berkali-kali.
 * Misalnya, mencetak angka 1 sampai 10, atau menampilkan data dari array.
 *
 * PHP menyediakan beberapa jenis perulangan:
 * - for
 * - while
 * - do..while
 * - foreach (khusus array)
 *
 * Yuk kita pelajari satu per satu. Pelan-pelan saja ya 😊
 */

/**
 * 1. PERULANGAN FOR
 *
 * Digunakan saat kita tahu berapa kali perulangannya akan terjadi.
 * Sintaks: for (start; kondisi; perubahan)
 */
echo "Contoh: FOR LOOP\n";
for ($i = 1; $i <= 5; $i++) {
    echo "Baris ke-$i" . PHP_EOL;
}
// Penjelasan:
// $i = 1         → mulai dari angka 1
// $i <= 5        → lakukan selama nilai $i kurang dari atau sama dengan 5
// $i++           → setiap loop, tambahkan 1 ke $i

/**
 * 2. PERULANGAN WHILE
 *
 * Digunakan saat kita ingin mengulang *selama kondisi masih bernilai true*.
 */
echo "\nContoh: WHILE LOOP\n";
$i = 1;
while ($i <= 5) {
    echo "Baris ke-$i" . PHP_EOL;
    $i++; // jangan lupa diubah nilainya agar tidak infinite loop
}

/**
 * 3. PERULANGAN DO WHILE
 *
 * Hampir sama dengan while, tapi kode dijalankan *minimal sekali*,
 * meskipun kondisi awalnya false.
 */
echo "\nContoh: DO WHILE LOOP\n";
$i = 1;
do {
    echo "Baris ke-$i" . PHP_EOL;
    $i++;
} while ($i <= 5);

/**
 * 4. PERULANGAN FOREACH (khusus array)
 *
 * Sangat cocok digunakan saat bekerja dengan array.
 */
echo "\nContoh: FOREACH LOOP\n";
$buah = ['Apel', 'Jeruk', 'Mangga', 'Pisang'];

foreach ($buah as $index => $namaBuah) {
    echo "Buah ke-$index: $namaBuah" . PHP_EOL;
}
// Penjelasan:
// $index    → posisi dalam array (mulai dari 0)
// $namaBuah → nilai dari array pada index tersebut
