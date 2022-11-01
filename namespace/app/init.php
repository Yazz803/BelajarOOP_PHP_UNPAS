<?php

// require_once 'Produk/infoproduk.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/game.php';
// require_once 'Produk/komik.php';
// require_once 'Produk/CetakInfoProduk.php';
// require_once 'Produk/User.php';

// require_once 'Service/User.php';

/*
Autoload adalah Memanggil class (file) tanpa harus menggunakan require, jadi secara otomatis nanti memanggilnya
1 class ditulis dalam 1 file
*/

// spl = standar php library
spl_autoload_register(function ($class){
    // App\\Produk\User = ["App", "Produk","User"] karena pake explode, jadilah array
    $class = explode('\\', $class);
    $class = end($class); // end berfungsi untuk mengambil nilai terakhir yg ada di dalam argumennya
    require_once __DIR__ . '/Produk/' . $class . '.php'; 
});

spl_autoload_register(function ($class){
    // App\\Produk\User = ["App", "Produk","User"] karena pake explode, jadilah array
    $class = explode('\\', $class);
    $class = end($class); // end berfungsi untuk mengambil nilai terakhir yg ada di dalam argumennya
    require_once __DIR__ . '/Service/' . $class . '.php'; 
});