<?php
/**
 * Demonstrasi literal numerik di PHP (PHP 8.1 / PHP 7.4+)
 * ---------------------------------------------------
 * • Decimal                : 1234
 * • Octal                  : 0123  (atau 0o123 sejak PHP 8.1)
 * • Hexadecimal            : 0x1a
 * • Binary                 : 0b11111111
 * • Underscore             : 1_234_567   (bisa di semua notasi)
 * • Float                  : 1.234
 * • Float E‑notation (+)   : 1.2e3   = 1200
 * • Float E‑notation (‑)   : 7e-3   = 0.007
 * • Overflow → float       : nilai > PHP_INT_MAX
 */

function show(string $label, $value): void
{
    echo "<strong>{$label}:</strong> ";
    var_dump($value);
    echo '<br>';
}

// Decimal
show('Decimal', 1234);

// Oktal (awalan 0, atau 0o/0O pada PHP 8.1)
show('Octal', 0123); // 83 desimal

// Heksadesimal (awalan 0x)
show('Hexadecimal', 0x1a); // 26 desimal

// Biner (awalan 0b)
show('Binary', 0b11111111); // 255 desimal

// Integer dengan underscore
show('Underscore di integer', 1_234_567);

// Floating‑point biasa
show('Floating point', 1.234);

// Floating‑point dengan notasi E (positif)
show('Float (E‑notation +, 1.2 × 10³)', 1.2e3);

// Floating‑point dengan notasi E (negatif)
show('Float (E‑notation ‑, 7 × 10⁻³)', 7e-3);

// Floating‑point dengan underscore
show('Underscore di float', 1_234.567);

// Integer maksimum pada platform 64‑bit
show('Integer max (PHP_INT_MAX)', PHP_INT_MAX);

// Overflow → otomatis menjadi float
show('Overflow menjadi float', PHP_INT_MAX + 1);
?>
