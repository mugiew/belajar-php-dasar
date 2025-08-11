<?php
// --------------------------------------------------------
// CONTOH LENGKAP OPERATOR DI PHP
// (dengan penjelasan komentar biar gampang dimengerti)
// --------------------------------------------------------

// 1. OPERATOR ARITMETIKA
// Digunakan untuk operasi matematis dasar

$a = 10 + 5; // Penjumlahan → 15
$b = 10 - 3; // Pengurangan → 7
$c = 4 * 2; // Perkalian → 8
$d = 9 / 2; // Pembagian → 4.5 (hasil float)
$e = 10 % 3; // Modulo → 1 (sisa bagi)
$f = intdiv(9, 2); // Pembagian bulat → 4

var_dump($a, $b, $c, $d, $e, $f);
echo "\n";

// 2. OPERATOR PENUGASAN
// Digunakan untuk menetapkan nilai ke variabel, bisa digabung dengan operator lain

$x = 5; // Assign awal
$x += 3; // x = x + 3 → 8
$x -= 2; // x = x - 2 → 6
$x *= 4; // x = x * 4 → 24
$x /= 2; // x = x / 2 → 12
$x %= 3; // x = x % 3 → 0
$x &= 6; // x = x & 6 → bitwise AND

var_dump($x);
echo "\n";

$x .= ' PHP'; // x = x . ' PHP' → '0 PHP' (gabung string)

var_dump($x);
echo "\n";

// 3. INKREMEN & DEKREMEN
// Untuk menambah atau mengurangi nilai 1

$i = 5;
++$i; // Pre-increment: langsung naik → 6
$i++; // Post-increment: naik setelah dipakai → 7
--$i; // Pre-decrement: langsung turun → 6
$i--; // Post-decrement: turun setelah dipakai → 5

var_dump($i);
echo "\n";

// 4. OPERATOR PERBANDINGAN
// Untuk membandingkan 2 nilai

$val1 = 5;
$val2 = '5'; // string
$val3 = 7;

var_dump($val1 == $val2); // true (nilai sama, tipe beda → dibolehkan)
var_dump($val1 === $val2); // false (karena tipe beda: int vs string)
var_dump($val1 != $val3); // true (karena 5 != 7)
var_dump($val1 !== $val2); // true (karena tipe beda)
var_dump($val1 < $val3); // true
var_dump($val3 > $val1); // true
var_dump($val1 <=> $val3); // -1 (spaceship operator: val1 < val3)
echo "\n";

// 5. OPERATOR LOGIKA
// Digunakan untuk kondisi bernilai true/false

$boolA = true;
$boolB = false;

var_dump($boolA && $boolB); // false (karena salah satunya false)
var_dump($boolA || $boolB); // true (karena salah satunya true)
var_dump(!$boolA); // false (karena dibalik dari true)
echo "\n";

// 6. OPERATOR BITWISE
// Dipakai untuk manipulasi biner (bit), berguna buat flag atau permission

$bit1 = 5; // 0101
$bit2 = 3; // 0011

var_dump($bit1 & $bit2); // 1 → 0001 (AND)
var_dump($bit1 | $bit2); // 7 → 0111 (OR)
var_dump($bit1 ^ $bit2); // 6 → 0110 (XOR)
var_dump(~$bit1); // -6 (NOT → dibalik semua bit)
var_dump($bit1 << 2); // 20 → geser 2 bit ke kiri
var_dump($bit1 >> 1); // 2 → geser 1 bit ke kanan
echo "\n";

// 7. OPERATOR STRING
// Untuk menggabungkan string (concatenation)

$str1 = 'Hello';
$str2 = 'World';
$full = $str1 . ' ' . $str2 . '!'; // "Hello World!"

var_dump($full);
echo "\n";

// 8. NULL COALESCING (??)
// Untuk ambil nilai default kalau variabelnya null atau tidak ada

$_GET['id'] = null; // Misalnya user tidak mengisi id
$id = $_GET['id'] ?? ($_POST['id'] ?? 'default-id'); // fallback chain

var_dump($id);
echo "\n";

// 9. TERNARY (?:)
// Alternatif if else sederhana

$a = 8;
$b = 12;

$maxValue = $a > $b ? $a : $b; // ambil nilai terbesar
$isAdmin = null;
$role = $isAdmin ?: 'guest'; // kalau null, pakai 'guest'

var_dump($maxValue);
var_dump($role);
echo "\n";

// 10. REFERENSI (&)
// Saat 2 variabel menunjuk ke alamat data yang sama

$original = 100;
$ref = &$original; // $ref adalah referensi ke $original
$ref = 200; // maka $original juga berubah

var_dump($original, $ref);
echo "\n";

// 11. OPERATOR ARRAY
// Untuk menggabungkan dan membandingkan array

$arr1 = ['a' => 1, 'b' => 2];
$arr2 = ['b' => 3, 'c' => 4];

$arrUnion = $arr1 + $arr2; // hasil: ['a' => 1, 'b' => 2, 'c' => 4] → key 'b' dari arr1 tetap dipakai

var_dump($arrUnion);

// Perbandingan array
var_dump($arr1 == ['b' => 2, 'a' => 1]); // true → isi dan key sama, urutan gak penting
var_dump($arr1 === ['a' => 1, 'b' => 2]); // true → identik semua (nilai, key, dan urutan)
var_dump($arr1 === ['b' => 2, 'a' => 1]); // false → urutan beda

// Perbandingan nilai array (lexicographical)
var_dump([1, 2, 3] < [1, 2, 4]); // true (karena elemen terakhir lebih kecil)
echo "\n";

// 12. CONTOH PRAKTIS: TOTAL BELANJA
// Menggunakan += untuk akumulasi harga

$total = 0;
$fruit = 10000;
$chicken = 35000;
$juice = 1000;

$total += $fruit;
$total += $chicken;
$total += $juice;

var_dump($total); // 46000
