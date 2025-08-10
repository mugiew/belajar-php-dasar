<?php
/**
 * Demo penggunaan variabel biasa dan variable variables di PHP
 * -----------------------------------------------------------
 * 1️⃣ Variabel biasa   : $name, $age, ...
 * 2️⃣ Variable variable: $$varName (membuat variabel dari nilai string)
 *
 * ⚠️ Catatan: Variable variables memang memungkinkan, tetapi
 *    dapat membuat kode sulit dibaca & debug. Gunakan hanya bila
 *    benar‑benar dibutuhkan (mis. dynamic variable nama dari array).
 */

/**
 * Helper untuk menampilkan label + nilai variabel dengan format HTML.
 *
 * @param string $label  Penjelasan yang ditampilkan
 * @param mixed  $value Nilai variabel (string, int, dll.)
 */
function show(string $label, $value): void {
    echo "<strong>{$label}:</strong> ";
    var_dump($value);   // menampilkan tipe data + nilai
    echo "<br>";
}

/* ---------- 1. Variabel biasa ---------- */
$name = 'Mugiew';     // string
$age  = 27;           // integer

show('Nama', $name);
show('Umur', $age);

/* ---------- 2. Variable Variables ---------- */
// Misalkan kita memiliki nama variabel dalam sebuah string
$varName = 'city';

// Membuat variabel secara dinamis dengan nilai 'Jakarta'
$$varName = 'Jakarta';   // setara dengan $city = 'Jakarta';

show('Nama Variabel Dinamis (city)', $city);

/* ---------- Contoh penggunaan yang kurang disarankan ---------- */
// Membuat banyak variabel dari array (contoh yang sering membuat kode berantakan)
$fields = ['first', 'last', 'email'];
foreach ($fields as $field) {
    $$field = "contoh_{$field}";
    // $$field menjadi $first, $last, $email
}

// Menampilkan salah satu variabel yang dibuat secara dinamis
show('Variabel $first (dinamis)', $first);

/* --------------------------------------------------------------- */
/*  ⚠️  Mengapa sebaiknya hindari variable variables?              */
/*  • Membuat kode **sulit dibaca** karena nama variabel tidak  */
/*    terlihat secara langsung.                                    */
/*  • Rentan **bug** ketika nama variabel di‑ubah atau typo.       */
/*  • Mengurangi kemampuan IDE untuk **autocompletion** & linting. */
/*  • Lebih baik gunakan **array** atau **object** untuk data    */
/*    yang bersifat dinamis.                                       */
/* --------------------------------------------------------------- */
?>
