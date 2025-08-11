<?php
/**
 * ======================================
 * BELAJAR FUNCTION DI PHP 🚀
 * ======================================
 * Disusun oleh: Bang Mugi Ganteng Maximal 😎
 *
 * Materi yang dibahas:
 *  1. Function Sederhana
 *  2. Function dengan Parameter
 *  3. Default Parameter
 *  4. Urutan Parameter
 *  5. Function dengan Return Value
 *  6. Anonymous Function (Closure)
 *  7. Arrow Function
 *  8. Variable Function
 *  9. Callback Function
 * 10. Recursive Function
 * 11. Eksekusi Demo
 */

// --------------------------------------
// 1. FUNCTION SEDERHANA
// --------------------------------------
function sayHello(): void
{
    echo "👋 Hello, Dunia!\n";
}

// --------------------------------------
// 2. FUNCTION DENGAN PARAMETER
// --------------------------------------
function sayHelloTo(string $name): void
{
    echo "👋 Hello, $name!\n";
}

// --------------------------------------
// 3. DEFAULT PARAMETER
// --------------------------------------
function sayHelloDefault(string $name = 'Murid PHP'): void
{
    echo "👋 Hello, $name!\n";
}

// --------------------------------------
// 4. URUTAN PARAMETER (WAJIB DULU)
// --------------------------------------
function sayFullName(string $first, string $last = 'Anonim'): void
{
    echo "👤 Nama Lengkap: $first $last\n";
}

// --------------------------------------
// 5. FUNCTION DENGAN RETURN VALUE
// --------------------------------------
function square(int $number): int
{
    return $number * $number;
}

// --------------------------------------
// 6. ANONYMOUS FUNCTION (CLOSURE)
// --------------------------------------
$prefix = 'Hai';
$greetWithPrefix = function (string $name) use ($prefix): string {
    return "$prefix $name 👋";
};

// --------------------------------------
// 7. ARROW FUNCTION (PHP 7.4+)
// Lebih singkat dan otomatis akses variabel luar
// --------------------------------------
$firstName = 'Mugiew';
$lastName = 'Galeano';

$sayHelloArrow = fn() => "🎯 Hello $firstName $lastName";

// --------------------------------------
// 8. VARIABLE FUNCTION
// Nama fungsi disimpan dalam variabel
// --------------------------------------
function foo(): void
{
    echo "📢 FOO\n";
}
function bar(): void
{
    echo "📢 BAR\n";
}

$functionA = 'foo';
$functionB = 'bar';

// --------------------------------------
// 9. CALLBACK FUNCTION
// Kirim fungsi sebagai argumen ke fungsi lain
// --------------------------------------
function sayGoodbye(string $name, callable $filter): void
{
    $filtered = call_user_func($filter, $name);
    echo "👋 Good Bye $filtered\n";
}

// --------------------------------------
// 10. RECURSIVE FUNCTION
// Fungsi yang memanggil dirinya sendiri
// --------------------------------------
function factorialLoop(int $n): int
{
    $total = 1;
    for ($i = 1; $i <= $n; $i++) {
        $total *= $i;
    }
    return $total;
}

function factorialRecursive(int $n): int
{
    if ($n === 1) {
        return 1;
    }
    return $n * factorialRecursive($n - 1);
}

// --------------------------------------
// 11. EKSEKUSI DEMO (RUN SEMUA)
// --------------------------------------
function runDemo(): void
{
    global $greetWithPrefix, $sayHelloArrow, $functionA, $functionB;

    echo "===========================\n";
    echo "📚 DEMO FUNCTION DI PHP\n";
    echo "===========================\n";

    // Function Sederhana
    sayHello();

    // Function dengan Parameter
    sayHelloTo('Mugi');

    // Default Parameter
    sayHelloDefault();
    sayHelloDefault('Galeano');

    // Urutan Parameter
    sayFullName('Budi');
    sayFullName('Mugi', 'Setiawan');

    // Return Value
    echo '🧮 5² = ' . square(5) . "\n";

    // Anonymous Function
    echo $greetWithPrefix('Andi') . "\n";

    // Arrow Function
    echo $sayHelloArrow() . "\n";

    // Variable Function
    $functionA(); // foo()
    $functionB(); // bar()

    // Callback Function
    sayGoodbye('Mugiew', fn($name) => strtoupper($name));
    sayGoodbye('Mugiew', 'strtolower');

    // Recursive Function
    echo '🔁 Faktorial Loop (5): ' . factorialLoop(5) . "\n";
    echo '🔁 Faktorial Recursive (5): ' . factorialRecursive(5) . "\n";

    echo "===========================\n";
    echo "✅ SELESAI DEMO FUNCTION\n";
    echo "===========================\n";
}

// --------------------------------------
// EKSEKUSI PROGRAM
// --------------------------------------
runDemo();
