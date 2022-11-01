<?php


require_once 'app/init.php';

// $produk3 = new komik("Naruto", "Mashasi Kisimoto", "Shounen jump", 30000, 100); 
// //jadi ketika object baru dibuat, maka parameter ini dikirim dan diterima di fungsi contructor, lalu dipakai untuk mengganti propertinya
// $produk4 = new game("Alcehmia Story", "Asobimo", "Play Store", 10000, 50);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk3);
// $cetakProduk->tambahProduk($produk4);
// echo $cetakProduk->cetak();

use App\Service\User as ServiceUser; // pake alias/nama lain (as)
use App\Produk\User as ProdukUser;

new ServiceUser(); // jadi ini gk usah pake App\Service\User lagi, cukup ketik User() aja.
echo "<br>";

new ProdukUser(); // karena gk pake alias, jadi harus ditulis App\Produk\User nya
// new App\Produk\User(); // karena gk pake alias, jadi harus ditulis App\Produk\User nya
