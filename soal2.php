<?php
// ===============================
// --- SOAL 2 --- ARRAY & SORTING
// ===============================
// Buat fungsi untuk mengurutkan array angka dari terbesar ke terkecil

function sortDescending(array $numbers): array
{
    // mengurutkan array secara descending
    rsort($numbers); // rsort = reverse sort (dari besar ke kecil)

    // sort($numbers); // mengurutkan array secara ascending (sort)
    return $numbers;
}

// Contoh pemanggilan fungsi
$input = [5, 2, 9, 1, 7];
$sorted = sortDescending($input);

// Tampilkan hasil
echo "Hasil sort descending: " . implode(', ', $sorted);
