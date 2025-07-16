<?php
// ===============================
// --- SOAL 4 --- CRUD SEDERHANA
// ===============================
// Buat class PHP sederhana dengan fitur: create, read, delete data dari array

class UserManager
{
    private array $users = [];

    public function create(string $name)
    {
        // menambah user baru
        $this->users[] = $name;
    }

    public function list(): array
    {
        // menampilkan semua user
        return $this->users;
    }

    public function delete(string $name)
    {
        // menghapus user berdasarkan nama
        $this->users = array_filter($this->users, fn($user) => $user !== $name);
    }
}

$um = new UserManager();
$um->create("Budi");
$um->create("Siti");
$um->create("Nabil");
$um->delete("Budi");
echo "Daftar user saat ini:\n";
print_r($um->list());

// Penjelasan:
// - Gunakan OOP sederhana
// - Simulasikan penyimpanan data dalam array property
