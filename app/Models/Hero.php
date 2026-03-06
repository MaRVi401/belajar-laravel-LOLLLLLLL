<?php

namespace App\Models;

class Hero
{
    // 1. PROPERTY (Sifat/Data)
    public $nama;
    public $darah = 100;
    public $power;

    // CONSTRUCTOR (Fungsi yang otomatis jalan saat objek dibuat)
    public function __construct($nama, $power)
    {
        $this->nama = $nama;
        $this->power = $power;
    }

    // 2. METHOD (Aksi/Perilaku)
    public function serang()
    {
        return "{$this->nama} menyerang dengan kekuatan {$this->power}!";
    }

    public function terimaSerangan($damage)
    {
        $this->darah -= $damage;
        return "Aduh! Darah {$this->nama} berkurang. Sisa darah: {$this->darah}";
    }

    public function info()
    {
        return "Nama: {$this->nama}, Darah: {$this->darah}, Power: {$this->power}";
    }
}