<?php
/*
Memanggil class (file) tanpa harus menggunakan require, jadi secara otomatis nanti memanggilnya
1 class ditulis dalam 1 file
*/


require_once 'app/init.php';

$produk3 = new komik("Naruto", "Mashasi Kisimoto", "Shounen jump", 30000, 100); 
//jadi ketika object baru dibuat, maka parameter ini dikirim dan diterima di fungsi contructor, lalu dipakai untuk mengganti propertinya
$produk4 = new game("Alcehmia Story", "Asobimo", "Play Store", 10000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk3);
$cetakProduk->tambahProduk($produk4);
echo $cetakProduk->cetak();