<?php
// 
/*
    procedural programing
    =programan secara prosedural, secara terurut dari atas sampai bawah, to the point misalkan 
    ingin menampilkan hello world kita hanya perlu echo "hello world";
    object oriented programing
    =kita akan memandang semuanya sebagai object, jadi menyusun semua kode program dan struktur data 
    sebagai objek, objek adalah unit dasar dari program, objek menyimpan data dan perilakum, objek 
    bisa saling berinteraksi, jadi nanti kita bisa bikin banyak objek, dan nanti objek tersebut bisa 
    saling berinteraksi. 

    Class
    Blueprint/tamplate untuk membuat instance dari object
    Class mendefinisikan object
    Calss menyimpan data dan perilaku yang disebut dengan property dan method
    intinya, class adalah blueprint/template yg dapat menyimpan property dan method yg nantinya akan
    dipanggil menggunakan object.

    Object 
    Instance yg didefinisikan oleh Class
    nanti akan ada banyak sekali object yg dapat dibuat dalam satu class
    object dibuat dengan menggunakan keyword "new" contohnya kita tulis dulu 
    variabel lalu diberi keyword "new" dan disambung dengan nama classnya
    contoh = $produk1 = new Produk();

    Property
    mempresentasikan data / keadaan dari sebuah object
    variabel yang ada di dalam object itu namanya property
    sama seperti variabel di php(diawali tanda dolar"$" dan nama variabelnya)
    tapi didepannya harus menggunakan visibility(public, private, protected)

    Method
    mempresentasikan perilaku / behavior dari sebuah object
    function yang ada di dalam object itu namanya method
    sama seperti function di php(cara penulisannya)
    tapi didepannya harus menggunakan visibility

*/

//Jualan produk
// Komik dan Game

class Produk {
    public $judul= "judul",      //ini artinya, jika memakai koma, maka semua variabel yg ada, visibillitynya public.
           $penulis = "penulis",    //jika memakai titik koma maka harus ditentukan dulu visibilitnya
           $penerbit = "penerbit",
           $harga = 0;

    public function getLabel() {
        return "$this->penulis, $this->penerbit"; // $this berfungsi untuk mengambil variable yg ada diluar function
    }

}

// $produk1 = new Produk(); //instance nya new untuk menambah object baru
// $produk2 = new Produk();

$produk3 = new Produk(); //mencetak objek baru dengan nama variable produk3
$produk3->judul="Naruto"; // itu kan diatas variabel judul sudah diisi dengan "judul" jika ingin ditimpa/diganti, maka pakai cara ini
$produk3->penulis="Masashi Kisimoto"; // sama seperti penjelasan diatas.
$produk3->penerbit="Shounen Jump";
$produk3->harga=25000;
$produk3->getLabel();

$produk4 = new Produk();
$produk4->judul="Alchemia Story";
$produk4->penulis="Asobimo";
$produk4->penerbit="Play Store";
$produk4->harga=100000;
$produk4->getLabel();

// echo "Komik : $produk3->penulis, $produk3->penerbit"; // cara manual memasukan satu satu
// echo "<br>"; // kita bisa menampilkan hal yg sama dengan menggunakan method
echo "Komik : " . $produk3->getLabel(); //untuk menampilkan ke layarnya bisa menggunakan ini
echo "<br>";
echo "Game : ". $produk4->getLabel();

?>