<?php
// Fokus pada: logika, manipulasi string/array, OOP, koneksi DB, validasi, API, dan mini project

// ===============================
// --- SOAL 1 --- FUNGSI DASAR
// ===============================
// Buat fungsi untuk menghitung jumlah huruf vokal dari sebuah string

function countVowels(string $text): int
{
    // definisi huruf vokal
    $vowels = ['a', 'i', 'u', 'e', 'o'];
    $count = 0;

    // loop setiap karakter dalam string
    for ($i = 0; $i < strlen($text); $i++) {
        // cek apakah huruf termasuk vokal
        if (in_array(strtolower($text[$i]), $vowels)) {
            $count++;
        }
    }
    return $count;
}

// Tambahkan pemanggilan fungsi
$input = "Halo Dunia!";
echo "Jumlah huruf vokal: " . countVowels($input);
// echo "Jumlah huruf vokal dalam 'Hallo Dunia': " . countVowels("Hallo Dunia") . PHP_EOL;

// $input = readline("Masukkan teks: ");
// echo countVowels($input);

// Penjelasan:
// - Gunakan in_array untuk cek apakah karakter termasuk huruf vokal
// - strtolower untuk abaikan kapital/kecil
