<?php
// ===============================
// --- SOAL 8 --- DATE & TIME
// ===============================
// Hitung umur dari tanggal lahir

function calculateAge(string $birthdate): int
{
    $birth = new DateTime($birthdate);
    $today = new DateTime();
    return $today->diff($birth)->y;
}

// Penjelasan:
// - Gunakan DateTime dan diff() untuk selisih waktu
// - Ambil properti ->y (year)