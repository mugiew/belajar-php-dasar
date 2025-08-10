<?php
/**
 * Demo tipe data string di PHP
 * -----------------------------------------------
 * 1️⃣ Single‑quote      : literal apa adanya
 * 2️⃣ Double‑quote      : mendukung escape sequence
 * 3️⃣ Heredoc           : string multilines dengan parsing (mirip double‑quote)
 * 4️⃣ Nowdoc            : string multilines tanpa parsing (mirip single‑quote)
 */

/**
 * Helper untuk menampilkan label + nilai string dengan format HTML.
 *
 * @param string $label  Penjelasan yang ditampilkan
 * @param mixed  $value Nilai string (bisa dari single, double, heredoc, nowdoc)
 */
function show(string $label, $value): void {
    echo "<strong>{$label}:</strong> ";
    var_dump($value);
    echo "<br>";
}

/* ---------- 1. Single Quote ---------- */
show('Single Quote', 'Mugi Nurul Ihksani');

/* ---------- 2. Double Quote (escape sequence) ---------- */
show('Double Quote dengan \n dan \t',
    "Mugi\tNurul\tIhksani\n");   // \t = tab, \n = line‑break

/* ---------- 3. Heredoc (parsing) ---------- */
$heredoc = <<<HDOC
Ini adalah contoh Heredoc.
Bisa menulis "double quote" tanpa escape.
Variabel dapat diparse, contoh: nama = Mugi Nurul Ihksani
HDOC;
show('Heredoc', $heredoc);

/* ---------- 4. Nowdoc (tanpa parsing) ---------- */
$nowdoc = <<<'NDOC'
Ini adalah contoh Nowdoc.
Semua karakter diperlakukan literal, termasuk "double quote".
Variabel tidak diparse: $nama tidak diganti.
NDOC;
show('Nowdoc', $nowdoc);
?>
