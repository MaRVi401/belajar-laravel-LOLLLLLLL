<?php

use Illuminate\Support\Facades\Route;
use App\Models\Hero;

Route::get('/', function () {
    $dataRahasia = ['id' => 1, 'nama' => 'Belajar Laravel'];

    debug('Halo dari Route!');
    debug($dataRahasia);

    return view('welcome', ['data' => $dataRahasia]);
});

Route::get('/toko', function () {
    $produks = [
        ['nama' => 'Laptop Gaming', 'harga' => 15000000, 'stok' => 5],
        ['nama' => 'Mouse Wireless', 'harga' => 250000, 'stok' => 20],
        ['nama' => 'Keyboard Mekanik', 'harga' => 800000, 'stok' => 0],
    ];

    foreach ($produks as $produk) {
        if ($produk['stok'] === 20) {
            debug("Peringatan: Stok " . $produk['nama'] . " habis!");
        }
    }

    return view('toko', ['daftarProduk' => $produks]);
});

Route::get('/lazy', function () {
    $users = \App\Models\User::without('posts')->get(['id', 'name']);

    return view('debug-loading', ['users' => $users]);
});

Route::get('/eager', function () {
    $users = \App\Models\User::all();

    return view('debug-loading', ['users' => $users]);
});

Route::get('/belajar-array', function () {
    // 1. Indexed Array (Daftar hobi sederhana)
    $hobi = ["Coding", "Gaming", "Reading"];

    // 2. Associative Array (Data satu orang spesifik)
    $profil = [
        "nama" => "Budi",
        "peran" => "Developer",
        "level" => "Pemula"
    ];

    // 3. Multidimensional Array (Daftar produk toko)
    $produk = [
        ["item" => "Laptop", "harga" => 15000000],
        ["item" => "Mouse", "harga" => 250000],
        ["item" => "Keyboard", "harga" => 800000]
    ];

    // Kita kirimkan semua jenis array ini ke view
    return view('belajar-array', compact('hobi', 'profil', 'produk'));
});

Route::get('/api/produk', function () {
    // Ini adalah Array Multidimensi PHP
    $dataProduk = [
        'status' => 'success',
        'update_terakhir' => now()->format('H:i'),
        'item' => [
            ['nama' => 'Kopi Tubruk', 'harga' => 15000],
            ['nama' => 'Roti Bakar', 'harga' => 20000],
        ]
    ];

    // Mengubah Array menjadi JSON dan mengirimnya sebagai Response
    return response()->json($dataProduk);
});

Route::get('/baca-json', function () {
    // Bayangkan ini teks JSON yang datang dari API luar
    $jsonDariLuar = '{"kota":"Subang","suhu":32,"kondisi":"Cerah"}';

    // Kita bongkar teks tersebut agar bisa dibaca PHP (true artinya jadi array)
    $dataArray = json_decode($jsonDariLuar, true);
    dd($dataArray);

    return "Di kota " . $dataArray['kota'] . " suhunya adalah " . $dataArray['suhu'] . " derajat.";
});

Route::get('/main-game', function () {
    // Membuat OBJEK pertama (Hero 1)
    $hero1 = new Hero("Gatotkaca", 50);

    // Membuat OBJEK kedua (Hero 2)
    $hero2 = new Hero("Arjuna", 40);

    // Membuat OBJEK ketiga (Hero 3)
    $hero3 = new Hero("Srikandi", 30);

    // Menampilkan properti dari objek
    echo "Nama Hero 1: " . $hero1->nama . "<br>";
    echo "Darah Hero 1: " . $hero1->darah . "<br>";
    echo "Power Hero 1: " . $hero1->power . "<br>";

    // Menjalankan METHOD
    echo $hero1->serang() . "<br>";
    echo $hero2->terimaSerangan(30) . "<br>";
    echo $hero3->serang() . "<br>";
    echo $hero1->info() . "<br>";
    echo $hero2->info() . "<br>";
    echo $hero3->info() . "<br>";

    echo "<hr>";

    // Cek isi objek lewat Debugbar/Dump
    dump($hero1);
    dump($hero2);
    dump($hero3);
});
