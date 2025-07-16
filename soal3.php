<?php
// ===============================
// --- SOAL 3 --- VALIDASI FORM
// ===============================
// Validasi input username & email sederhana

function validateForm($data)
{
    $errors = [];

    // cek username kosong
    if (empty($data['username'])) {
        $errors['username'] = 'Username wajib diisi';
    }

    // validasi format email
    if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Email tidak valid';
    }
    return $errors;
}

$formData = ["username" => "", "email" => "salahformat"];
$errors = validateForm($formData);
echo "Hasil validasi form:\n";
print_r($errors);

// Penjelasan:
// - Cek kosong dengan empty
// - Validasi email menggunakan filter_var + FILTER_VALIDATE_EMAIL
