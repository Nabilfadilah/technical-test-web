<?php
// ===============================
// --- SOAL 6 --- MINI API ENDPOINT
// ===============================
// Buat endpoint sederhana yang menerima POST JSON dan kembalikan respon JSON

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    header('Content-Type: application/json');
    $data = json_decode(file_get_contents('php://input'), true);

    if (isset($data['name'])) {
        echo json_encode(['status' => 'success', 'name' => $data['name']]);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Name is required']);
    }
}

// Penjelasan:
// - `php://input` untuk ambil body JSON
// - json_decode + json_encode untuk manipulasi JSON