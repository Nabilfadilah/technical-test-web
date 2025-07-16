<?php
// ===============================
// --- SOAL 5 --- MYSQLI + SELECT
// ===============================
// Tampilkan semua data dari tabel "users"

$conn = new mysqli('localhost', 'root', '', 'testdb');
$result = $conn->query("SELECT * FROM users");

while ($row = $result->fetch_assoc()) {
    echo $row['name'] . "<br>";
}

// Penjelasan:
// - Gunakan mysqli untuk koneksi
// - fetch_assoc() mengambil hasil dalam bentuk array asosiatif