<?php
declare(strict_types=1); // aktifkan pengecekan tipe ketat

/**
 * Menampilkan label dan nilai dalam format HTML.
 *
 * Menggunakan `var_dump` agar tipe data terlihat jelas.
 *
 * @param string $label  Penjelasan yang akan ditampilkan
 * @param mixed  $value Nilai yang akan di‑dump
 */
function show(string $label, $value): void
{
    echo "<strong>{$label}:</strong> ";
    var_dump($value);
    echo '<br>';
}

/**
 * Mengonversi nilai antara string, integer, dan float.
 *
 * - Jika `$target` adalah `'int'` atau `'float'`, fungsi meng‑cast nilai string ke tipe numerik.
 * - Jika `$target` adalah `'string'`, fungsi mengubah nilai numerik menjadi string.
 *
 * @param string|int|float $value  Nilai yang akan dikonversi
 * @param string           $target Tipe tujuan: 'int', 'float', atau 'string'
 *
 * @return int|float|string|null  Nilai hasil konversi atau null jika target tidak valid
 */
function convert($value, string $target)
{
    switch (strtolower($target)) {
        case 'int':
            return (int) $value; // atau intval($value)
        case 'float':
            return (float) $value; // atau floatval($value)
        case 'string':
            return (string) $value; // atau strval($value)
        default:
            return null;
    }
}

/* ---------- 1️⃣ Single‑quote ---------- */
show('Single Quote', 'Mugi Nurul Ihksani');

/* ---------- 2️⃣ Double‑quote (escape sequence) ---------- */
show('Double Quote dengan \n dan \t', "Mugi\tNurul\tIhksani\n"); // \t = tab, \n = line‑break

/* ---------- 3️⃣ Heredoc (parsing) ---------- */
$heredoc = <<<HDOC
Ini adalah contoh Heredoc.
Bisa menulis "double quote" tanpa escape.
Variabel dapat diparse, contoh: nama = Mugi Nurul Ihksani
HDOC;
show('Heredoc', $heredoc);

/* ---------- 4️⃣ Nowdoc (tanpa parsing) ---------- */
$nowdoc = <<<'NDOC'
Ini adalah contoh Nowdoc.
Semua karakter diperlakukan literal, termasuk "double quote".
Variabel tidak diparse: $nama tidak diganti.
NDOC;
show('Nowdoc', $nowdoc);

/* ---------- 5️⃣ Konversi String ↔ Number ---------- */
// String ke integer
$numericString = '12345';
$asInt = convert($numericString, 'int');
show('String ke Integer', $asInt);

// String ke float
$floatString = '3.14159';
$asFloat = convert($floatString, 'float');
show('String ke Float', $asFloat);

// Integer ke string
$intNumber = 2025;
$asString = convert($intNumber, 'string');
show('Integer ke String', $asString);
?>
