<?php
// ===============================
// --- SOAL 10 --- HITUNG UMUR
// ===============================
// Hitung umur dari tanggal lahir (format YYYY-MM-DD)

function calculateAge(string $birthdate): int
{
    $birth = new DateTime($birthdate);
    $today = new DateTime();
    // Menghitung selisih tahun
    return $today->diff($birth)->y;
}

$umur = calculateAge("2001-12-28");
echo "Umur: $umur tahun" . PHP_EOL;
