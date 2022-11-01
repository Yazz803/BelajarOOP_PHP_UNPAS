<?php

// require_once 'Produk/infoproduk.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/game.php';
// require_once 'Produk/komik.php';
// require_once 'Produk/CetakInfoProduk.php';


/*
Autoload adalah Memanggil class (file) tanpa harus menggunakan require, jadi secara otomatis nanti memanggilnya
1 class ditulis dalam 1 file
*/

// spl = standar php library
spl_autoload_register(function ($class){
    require_once __DIR__ . '/Produk/' . $class . '.php'; 
}); 