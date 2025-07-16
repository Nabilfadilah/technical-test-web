<?php
// ===============================
// --- SOAL 7 --- FILE HANDLING
// ===============================
// Simpan data dari form ke file txt

$name = $_POST['name'] ?? '';
file_put_contents('names.txt', $name . PHP_EOL, FILE_APPEND);

// Penjelasan:
// - FILE_APPEND untuk menambahkan isi file tanpa overwrite
// - PHP_EOL = newline sesuai OS