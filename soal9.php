<?php

// ===============================
// --- SOAL 9 --- CLASS & INHERITANCE
// ===============================

class Animal
{
    public function sound()
    {
        return "Bunyi umum";
    }
}

// class anak
class Cat extends Animal
{
    public function sound()
    {
        return "Meong";
    }
}

$kucing = new Cat();
echo $kucing->sound(); // output: Meong

// Penjelasan:
// - Cat mewarisi Animal
// - Override method sound()