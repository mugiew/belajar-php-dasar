<?php

/**
 * BREAK DAN CONTINUE DALAM PERULANGAN
 *
 * Kadang dalam perulangan, kita butuh menghentikan proses lebih awal,
 * atau melewati satu langkah tanpa keluar dari loop.
 *
 * Nah, di sinilah `break` dan `continue` jadi sahabat baik kita 😊
 */

/**
 * 1. BREAK → Menghentikan seluruh perulangan
 *
 * Digunakan saat kita ingin keluar dari loop sebelum kondisinya selesai.
 * Misalnya: berhenti saat ketemu data tertentu.
 */
echo "Contoh: BREAK\n";

for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        echo "Loop dihentikan di angka $i\n";
        break; // menghentikan loop
    }

    echo "Angka: $i\n";
}
// Penjelasan:
// Perulangan akan berhenti total saat $i bernilai 5
// Angka 5 tidak dicetak karena break dijalankan sebelum echo

/**
 * 2. CONTINUE → Melewati satu iterasi (loncat dulu, lanjut lagi)
 *
 * Cocok jika kita ingin *skip* nilai tertentu tapi tetap melanjutkan loop.
 */
echo "\nContoh: CONTINUE\n";

for ($i = 1; $i <= 5; $i++) {
    if ($i == 3) {
        echo "Melewati angka $i\n";
        continue; // lewati langkah ini, lanjut ke angka berikutnya
    }

    echo "Angka: $i\n";
}
// Penjelasan:
// Saat $i == 3, perintah `continue` dijalankan → baris echo di bawahnya dilewati
